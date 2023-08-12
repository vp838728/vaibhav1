<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.contact');
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
            'Name'=>'required',
            'Email'=>'sometimes|required|email',
            'Message'=>'required',
        ]);
        $data=new contact();
        $data->Name =$request->Name;
        $data->Email =$request->Email;
        $data->Message =$request->Message;
        $data->save();

        return redirect('/contact')->with('SUCESSS','contact sucessfully add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, contact $contact)
    {
        $search=$request->search ??"";

        if($search !=''){
            $contact = contact::where('Name','LIKE','%'.$search.'%')
            ->orWhere('Email','LIKE','%'.$search.'%')
            ->get();

        }else{
             $contact=contact::all();
        }

        return view('admin.mng_contact',['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }
    public function serach(Request $request)
    {
        $search=$request->serach ??"";
        if($request->serach !=''){
                    
            $data = user::where('name','LIKE','%'.$search.'%')
            ->orWhere('email','LIKE','%'.$search.'%')
            ->get();

        }else{
             $data=contact::all();
        }
        return view('admin.mng_contact',['contact'=>$contact]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact,$id)
    {
        $data=contact::find($id);
        $data->delete();
        return redirect('/mng_contact')->with('SUCESSS','delete sucess');
    }
}
