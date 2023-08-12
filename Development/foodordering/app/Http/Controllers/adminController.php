<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Hash;
use Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
    public function loginauth(Request $request)
    {
        $anm=$request->anm;
		$data=admin::where('anm','=',$anm)->first();
        if($data)
		{
			
			if(Hash::check($request->apss,$data->apss))
			{
				
                Session()->put('adminid',$data->id); 

                    Session()->put('anm',$data->anm); 

					return redirect('/admin_dashboard');
				
				
			}
			else
			{
				return redirect('/admin_login')->with('fail','Pasword Not Valid');
			}
		}
		else
		{
			return redirect('/admin_login')->with('fail','Username Not Valid');
		}	
           
       
}

    public function logout(admin $admin)
    {
				
        Session()->pull('anm');
        Session()->pull('adminid');



    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        
    }
}
