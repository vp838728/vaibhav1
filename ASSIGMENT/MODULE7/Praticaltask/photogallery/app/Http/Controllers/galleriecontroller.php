<?php

namespace App\Http\Controllers;

use App\Models\gallerie;
use Illuminate\Http\Request;

class galleriecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image_upload');
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
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data=new gallerie();
        $data->name=$request->name;
        $file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
       $file->move('website/upload/',$filename); 
        $data->file=$filename;
        $data->description=$request->description;

        $data->save();

        return redirect('image_upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function show(gallerie $gallerie)
    {
        $data=gallerie::all();
        return view('gallery',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(gallerie $gallerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallerie $gallerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallerie $gallerie)
    {
        //
    }
}
