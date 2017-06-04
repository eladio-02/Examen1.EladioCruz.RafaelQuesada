<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DateTime;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        return view('/newproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()//array $data)
    {
        $data = Input::all();    

        $fecha = date("Y/m/d"); 

        Product::create([
            'name' => $data['name'],
            'brand' => $data['brand'],
            'family' => $data['family'],

            'factory' => $data['factory'],
            'brand' => $data['brand'],
            'family' => $data['family'],
            'departamento' => $data['departamento'],
            'type' => $data['type'],
            'active' => 1,
            'unity' => $data['unity'],
            'tax' => $data['tax'],
            'date1' => $fecha ,
        ]);
        return redirect('/home'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('/editproduct', ['producto' => Product::find($id)] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
        $data = Input::all();
        Product::where('id', $data[id])
          ->update([
            'name' => $data['name'],
            'brand' => $data['brand'],
            'family' => $data['family'],
            'factory' => $data['factory'],
            'brand' => $data['brand'],
            'family' => $data['family'],
            'departamento' => $data['departamento'],
            'type' => $data['type'],
            'unity' => $data['unity'],
            'tax' => $data['tax'],
        ]);
        return redirect('/home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)
          ->update(['active' => 0]);
        return redirect('/home');
    }
}
