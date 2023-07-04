<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Validator;

use Hash;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'Required',
            'email'=>'Required|unique:users|',
            'password'=>'Required|min:4|max:6',
            'cpass'=> 'Required|same:password',


        ]);
        
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}else{
            if ($request->password == $request->cpass) {

        $data=new user();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password); 
        $data->save();
        return response()->json([
            'status'=>200,
            'name'=>$data->name,
            'email'=>$data->email,
            'password'=>$data->password,
            'meassge'=>'regsiter sucess',
            
        ]);
    }else{
        return response()->json([
            'status'=>400,
            'meassge'=>'password does not match',
            
        ]);
    }
        }
    }
  


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        $data=user::all();
        if($data->count()>0){
        return  response()->json([
        'status'=>200,
        'user'=>$data,
        ]);
    }else{
            return  response()->json([
                'status'=>404,
                'messsage'=>'no record found',
                ]);
        
    }
}
public function loginauth(Request $request){
    $validate=VALidator::make($request->all(),[
        'email'=>'Required',
        'password'=>'Required|same:password',
    ]);
    if($validate->fails()){
        return [
            'success' => 0, 
            'message' => $validate->messages(),
        ];
    }else{
        $user=user::where('email','=',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json([
              'status'=>201,
              'message'=>'student Login Failed due to Wrong Creadantial',

            ]);
        }else{
            return response()->json([
                'status'=>201,
                'message'=>'Login sucesss',
                'email'=>$user->name,
                'password'=>$user->password  
              ]);
              
        }
    }

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::find($id)->delete();
		return response()->json([
		'status'=>200,
		'msg'=>"Delete Success"
		]);
    }

}