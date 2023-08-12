<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.add_cat');
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
        $data=new categorie();
        $data->name=$request->name;
        $data->save();
        return redirect('/add_cat')->with('SUCESSS','catgory sucesfilly add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(categorie $categorie)
    {
        $data=categorie::all();
        return view('admin.mng_cat',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie $categorie,$id)
    {
        $data=categorie::find($id);
        return view('admin.edit_cat',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorie $categorie,$id)
    {
        $data=categorie::find($id);
        
        $data->name=$request->name;
        $data->save();
        return redirect('/mng_cat')->with('SUCESSS','Category Update Sucess ' );
    }

    /**
     *
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorie $categorie,$id)
    {
        $data=categorie::find($id);
        $data->delete();
        return redirect('/mng_cat')->with('SUCESSS','Category Update Sucess');
    }
}
