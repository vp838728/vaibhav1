<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add-book');
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
        $data=new book();
        $data->title=$request->title;
        $data->subject=$request->subject;
        $data->AutherName=$request->AutherName;
        $data->Publisher=$request->Publisher	;
        $data->Department=$request->Department;
        $data->Assettype=$request->Assettype;
        $data->Price=$request->Price;
        $file = $request->file('file');
        $filename = time() . '_img.' . $request->file('file')->getClientOriginalExtension();
        $file->move('admin/upload/book/', $filename);
        $file=$data->file = $filename;
        $data->save();
        return redirect('/add-book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        $data=book::all();
        return view('admin.all-book',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book,$id)
    {
        $data=book::find($id);
        return view('/admin.edit-book',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book,$id)
    {
        $data=book::find($id);
        $data->title=$request->title;
        $data->subject=$request->subject;
        $data->AutherName=$request->AutherName;
        $data->Publisher=$request->Publisher	;
        $data->Department=$request->Department;
        $data->Assettype=$request->Assettype;
        $data->Price=$request->Price;
        
        if($request->hasfile('file')){
            $old_img=$data->file;
            $file=$request->file('file');
            $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
            $file->move('admin/upload/book/',$filename);
            $data->file=$filename;

        }
        $data->save();
        return redirect('/all-book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book,$id)
    {
       $data=book::find($id);
       $delfile=$data->file;
       $data->delete();
       unlink('admin/upload/book/'.$delfile);
       return view('/admin.add-book');
    }
}
