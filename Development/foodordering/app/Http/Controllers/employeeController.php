<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add_emp');
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
        $data= new employee();
        
        $data->name=$request->name;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->username=$request->username;
        $data->pass=md5($request->pass);
        $file=$request->file('file');
        // $filename=time().'_img.'.$request->file('file')->getclientOriginalExtension();
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();

        $file->move('admin/upload/employee/',$filename);
        $data->file=$filename;
        // echo"<pre>";
        // print_r($data);
        // exit();
        $data->save();
        return redirect('/add_emp')->with('SUCESSS','employee sucessfully add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        $data=employee::all();
        return view('admin.mng_emp',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee,$id)
    {
        $data=employee::find($id);
        return view('admin.edit_emp',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee,$id)
    {
        $data=employee::find($id);
        $data->name=$request->name;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->username=$request->username;
        if($request->hasfile('file'))
        {
            $old_img=$data->file;
            unlink('admin/upload/employee/'.$old_img);
            $file=$request->file;
            $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
            $file->move('admin/upload/employee/',$filename);
            $data->file=$filename;
        }
        $data->save();
        return redirect('/mng_emp')->with('SUCESSS','Employee Update sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee,$id)
    {
        $data=employee::find($id);
        $data->delete();
        return redirect('/mng_emp')->with('SUCESSS','delete sucess');
    }
}
