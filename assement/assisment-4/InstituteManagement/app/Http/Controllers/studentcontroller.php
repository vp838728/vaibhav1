<?php

namespace App\Http\Controllers;
use App\Models\student;
use Hash;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('add-student');
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
        $data=new student();
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->rollnum=$request->rollnum;
        $data->class=$request->class;
        $data->gen=$request->gen;
        $data->pname=$request->pname;
        $data->address=$request->address;

        $file = $request->file('file');
        $filename = time() . '_img.' . $request->file('file')->getClientOriginalExtension();
        $file->move('admin/upload/student/', $filename);
        $file=$data->file = $filename;
        $data->pass=hash::make($request->pass);

        $data->save();
        return redirect('/add-professor')->with('sucess','add-professor sucessfully register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        $data=student::all();
        
        return view('admin.all-students',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( student $student,$id)
    {
        $data=student::find($id);
        return view('/admin.edit-student',['data'=>$data]);
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
        $data=student::find($id);
        $data->fname=$request->fname;
        $data->lname=$request->lname	;
        $data->email=$request->email;
        $data->rollnum=$request->rollnum;
        $data->class=$request->class;
        $data->gen=$request->gen;
        $data->mobile=$request->mobile;
        $data->pname=$request->pname;
        $data->address=$request->address;

        if($request->hasfile('file')){
            $old_img=$data->file;
            $file=$request->file('file');
            $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
            $file->move('admin/upload/student/',$filename);
            $data->file=$filename;

        }
        $data->save();
        return redirect('/all-students')->with('sucess','update sucesss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $Request,$id)
    {
        $data=student::find($id);
        $delfile=$data->file;
        $data->delete();
        unlink('admin/upload/student/'.$delfile);
        return redirect('/all-students');
    }
}
