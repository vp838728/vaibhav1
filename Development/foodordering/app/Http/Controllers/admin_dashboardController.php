<?php

namespace App\Http\Controllers;

use App\Models\admin_dashboard;
use App\Models\user;
use App\Models\categorie;
use App\Models\product;
use App\Models\employee;


use Illuminate\Http\Request;

class admin_dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totaluserdata=user::count();
        $totalcategory=categorie::count();
        $totalproduct=product::count();
        $totalemployee=employee::count();
        return view('admin.admin_dashboard',['totaluserdata'=>$totaluserdata,'totalcategory'=>$totalcategory,'totalproduct'=>$totalproduct,'totalemployee'=>$totalemployee]);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin_dashboard  $admin_dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(admin_dashboard $admin_dashboard)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin_dashboard  $admin_dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(admin_dashboard $admin_dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin_dashboard  $admin_dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin_dashboard $admin_dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin_dashboard  $admin_dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin_dashboard $admin_dashboard)
    {
        //
    }
}
