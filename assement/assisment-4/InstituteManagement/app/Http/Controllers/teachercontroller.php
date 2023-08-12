<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;
use Hash;


class teachercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add-professor');
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
        $data=new teacher();
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->pass=hash::make($request->pass);
        $data->mobile=$request->mobile;
        $data->gen=$request->gen;
        $data->Designation=$request->Designation;
        $data->Department=$request->Department;
        $data->Education=$request->Education;
        $file = $request->file('file');
        $filename = time() . '_img.' . $request->file('file')->getClientOriginalExtension();
        $file->move('admin/upload/customer/', $filename);
        $file=$data->file = $filename;
        $data->save();
        return redirect('/add-professor')->with('sucess','add-professor sucessfully register');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        $data=teacher::all();
        // echo"<pre>";
        // print_r($data);
        // exit;
        return view('admin.all-professors',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher,$id)
    {
        $data=teacher::find($id);
        return view('/admin.edit-professor',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teacher,$id)
    {
        $data=teacher::find($id);
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->gen=$request->gen;
        $data->Designation=$request->Designation;
        $data->Department=$request->Department;
        $data->Education=$request->Education;
        if($request->hasfile('file')){
            $old_img=$data->file;
            $file=$request->file('file');
            $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
            $file->move('admin/upload/customer/',$filename);
            $data->file=$filename;

        }
        $data->save();
        return redirect('/all-professors')->with('sucess','update sucesss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher,$id)
    {
        $data=teacher::find($id);
        $delfile=$data->file;
        $data->delete();
        unlink('admin/upload/customer/'.$delfile);
        return redirect('/all-professors');

    }
}
