<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\countrie;
use Illuminate\Http\Request;
use Hash;
use Session;
use Mail;
use App\Mail\welcomemail;
use Illuminate\Support\Facades\Auth;
use Alert;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countrie=countrie::all();

        return view('website.signin',['countrie'=>$countrie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function logout()
    {
        session()->pull('userid');
        session()->pull('username');
        session()->pull('name');
    //    return redirect('/')->with('SUCESSS','logout sucess');

       return redirect('/');


    }
    
    public function login(Request $request)
    {
             return view('website.login');

    }
    public function loginauth(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'pass' => 'required|min:3|max:12',

        ]);
       
        $username=$request->username;
		$data=user::where('username','=',$username)->first();
        
        
        
        if($data)
		{
			
			if(Hash::check($request->pass,$data->pass))
			{
				if($data->status=="Unblock")
				{
                    Session()->put('userid',$data->id); 
                    Session()->put('username',$data->username); 
                    Session()->put('name',$data->name); 

					return redirect('/');
				}
				else
				{
					return redirect('/login')->with('fail','Login Failed Due To Blocked Account');
				}
				
			}
			else
			{
				return redirect('/login')->with('fail','Pasword Not Valid');
			}
		}
		else
		{
			return redirect('/login')->with('fail','Username Not Valid');
		}	
           
       
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'name' => 'required',
            'pass' => 'required|min:3|max:12',
            'gen'=>'required|in:male,female',
            'lag'=>'required',
            'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cid'=>'required',
            'Email'=>'sometimes|required|email',
            'cpass'=> 'required|same:pass',

        ]);
        $username = $request->username;
        $existingUser = User::where('username', $username)->first();
    
        if ($existingUser) {
            return redirect('signin')->with('fail', 'Username already exists');
        }
    
        if ($request->pass == $request->cpass) {
            $data = new User();
           $email= $data->username = $request->username;
            $data->name = $request->name;
            $data->pass = Hash::make($request->pass);
            $data->gen = $request->gen;
            $data->lag = implode(',', $request->lag);
    
            $file = $request->file('file');
            $filename = time() . '_img.' . $request->file('file')->getClientOriginalExtension();
            $file->move('website/upload/customer/', $filename);
            $file=$data->file = $filename;
    
            $data->cid = $request->cid;
            $data->Email = $request->Email;
            $data->save();

            $name =$request->name;
            $Email =$request->Email;
            $imgPath = "website/upload/customer/".$filename;
            $fileContents = file_get_contents('website/upload/customer/'.$filename);

            $data=array("name"=>$name,"Email"=>$Email,"imgPath"=>$imgPath,'file'=>$file,'fileContents'=>$fileContents);
            Mail::to($Email)->Send(new welcomemail($data));
            Alert::success('Congrats', 'You\'ve Successfully Registered');

            // return redirect('login')->with('success', 'Registration successful');
            return redirect('signin');

        } else {
            Alert::danger('sorry', 'You\'username is aleready Registered');
            return redirect('signin');
            Alert::danger('sorry', 'Please\'password cpassowd are not same');

            return redirect('signin');
        }
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        $data=user::join('countries','users.cid','countries.id')->get((['users.*','countries.name']));

        return view('admin.mng_user',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function editprofile(user $user,$id)
    {
        $countrie=countrie::all();
        $data=user::find($id);
        return view('website.editprofile',['countrie'=>$countrie,'data'=>$data]);
    }
    public function profile(user $user)
    {
        if(session()->get('userid')) {
            $data=user::join('countries','users.cid','=','countries.id')->where('users.id','=',session('userid'))
            ->first(['users.*','countries.name as cname']);
            // $data=user::join('countries','users.cid','countries.id')->where->where('customers.id','=',session('userid'))->first(['users.*','countries.name']);

            return view('website.profile',['data'=>$data]);
        } else {
            return redirect('login')->with('fail','please logiin first ');
        }
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user,$id)
    {
        $data=user::find($id);
        // echo"<pre>";
        // print_r($request->all());
        // exit();
            $data->username = $request->username;
            $data->name = $request->name;
            $data->gen = $request->gen;
            $data->lag = implode(",", $request->lag);
            $data->cid=$request->cid;
            if($request->hasfile('file'))
            {
                $old_img=$data->file;
                unlink('website/upload/customer/'.$old_img);
                $file=$request->file('file');
                $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
                $file->move('website/upload/customer/',$filename);
                $data->file=$filename;
                $data->save();
                

            }
            return redirect('/profile')->with('Success','Update Succeess');
            Session()->put('name',$data->name);

    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user,$id)
    {
        $data=user::find($id);
        $delfile=$data->file;
        $data->delete();
        unlink('website/upload/customer/'.$delfile);
        return redirect('/mng_user')->with('SUCESSS','delete sucess');
    }
    public function view(user $user,$id)
    {
        $data=user::find($id);
        return view('admin.viewuser',['data'=>$data]);


    }
    public function staus(user $user,$id)
    {
        $data=user::find($id);
        if($data->status=="Unblock")
        {
            $data->status = "Block";
            $data->save();

            return redirect('/mng_user')->with('fail','User block sucesss');
        }
        elseif ($data->status=="Block")
        {
            
            // session()->forget('userid');
            // session()->forget('name');
            // session()->forget('username');
            Auth::logout();
             session()->flush();


            
            // session()->pull('userid');
            // session()->pull('name');
            // session()->pull('username');
            $data->status = "UnBlock";
            $data->save();

            return redirect('/mng_user')->with('SUCESSS','User Unblock sucesss');

        }
        // $data=save();


    }
}