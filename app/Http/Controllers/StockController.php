<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Stock_Movement;
use App\Stock_Movement_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DateTime;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/stock', ['stock' => Stock::all() ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createStockItem()
    {
        return view('/newstockitem');
    }
    public function create()
    {
    	$data = Input::all();
      
        $fecha = date("Y/m/d");
       

       Stock::create([
           'product_id' => $data['product_id'],
           'quantity' => $data['quantity'],
           'min_quantity' => $data['min_quantity'],
           'max_quantity' => $data['max_quantity'],
           'gravado' => $data['gravado'],
           'date1' => $fecha,
       ]);
       return view('/stock', ['stock' => Stock::all() ] );
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
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/editstock', ['stockItem' => Stock::find($id)] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

    	$data = Input::all();
      
        $fecha = date("Y/m/d");
        $stock = Stock::find($id);
        if(!is_null($stock)){ 
            $stock->product_id = $stock->product_id;
            $stock->quantity = $data['quantity'];
            $stock->min_quantity = $data['min_quantity'];
            $stock->max_quantity = $data['max_quantity'];
            $stock->gravado = $data['gravado'];
            $stock->date1 = $fecha;
            $stock->save();
            return redirect('/stock'); 
        }
        else{
            return redirect('/stock');
        }
        return redirect('/stock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $stock = Stock::find($id);
        $stock->delete();
        return redirect('/stock');
    }
}
