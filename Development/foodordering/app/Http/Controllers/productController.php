<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\categorie;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=categorie::all();
        return view('admin.add_product',['data'=>$data]);
    }
    public function index1()
    {
        return view('website.productlist');
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
        $data=new product();
        $data->name=$request->name;

        $data->description=$request->description;
        $file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();

        $file->move('admin/upload/productimages/',$filename);
        $data->file=$filename;
        $data->price=$request->price;
        $data->catid=$request->catid;
        $data->description=$request->description;
        $data->qty=$request->qty;
        $data->taxs=$request->taxs;
        $data->price=$request->price;
        $data->selling_price=$request->selling_price;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        $data->meta_keywords=$request->meta_keywords;
        $data->treading=$request->treading;
        

        $data->save();
        return redirect('/add_product')->with('Sucess','product success fully adding');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $data=product::join('categories','products.catid','categories.id')->get((['products.*','categories.name as cat_name']));

        //  $data=product::all();
        return view('admin.mng_product',['data'=>$data]);
    }
    
    public function show2(product $product)
    {

         $data=product::all();
        return view('website.menu',['data'=>$data]);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product,$id)
    {
       $categorie=categorie::all();
       $data=product::find($id);

        return view('admin.editproduct',['data'=>$data,'categorie'=>$categorie]);
    // return redirect('/editproduct')->with(['data'=>$data,'data1'=>$data1]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product,$id)
    {
        $data=product::find($id);
        $data->name=$request->name;

        $data->description=$request->description;
        if($request->hasFile('file'))
        {
            $old_img=$data->file;
            unlink('admin/upload/productimages/'.$old_img);
            
            $file=$request->file;
            $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
            $file->move('admin/upload/productimages/',$filename);
            $data->file=$filename;
            
        }

        $data->save();
        return redirect('/mng_product')->with('Success','Update Succeess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect('/mng_product')->with('SUCESSS','delete sucess');
    }
}
