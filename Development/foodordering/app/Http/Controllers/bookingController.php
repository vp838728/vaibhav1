<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use session;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
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
        if(!empty(session()->get('userid'))){
            
    $data=new booking();
    $data->time=$request->time;
    $data->user_id=session()->get('userid');
    $data->people=$request->people;
    $data->save();
    return redirect('/')->with('SUCESSS','Booking tabel sucess');
        }
        return redirect('login')->with('fail','Please login first for booking.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        // $data=booking::all();
         $data=booking::join('users','users.id','bookings.user_id')->get((['bookings.*','users.name']));
        // $data=user::join('countries','users.cid','countries.id')->get((['users.*','countries.name']));

        

        return view('admin.mng_booking',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking,$id)
    {
        $data=booking::find($id);
        $data->delete();
        return redirect('/mng_booking')->with('SUCESSS','delete sucess');

    }
}
