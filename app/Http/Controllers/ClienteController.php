<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DateTime;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/cliente', ['clientes' => Cliente::all() ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCliente()
    {
        return view('/newclient');
    }
    public function create()
    {
       $data = Input::all();
       $sexo=0;
       $status = 0;
       
       $fecha = date("Y/m/d");
       
       /*if($data['Status']=="Soltero"){
           $status = 1;
       }

       if($data['Tipo']=="Masculino"){
           $sexo = 1;
       }*/

       Cliente::create([
           'id' => $data['id'],
           'name' => $data['name'],
           'apellido' => $data['apellidos'],
           'birthday' => $data['birthday'],
           'status' => $data['Status'],
           'sexo' => $data['Tipo'],
           'active' => 1,
           'discount' => $data['discount'],
           'date1' => $fecha,
       ]);
       return redirect('/clientes');
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
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Cliente::where('id', $id)
          ->update(['active' => 0]);
        return redirect('/clientes');
    }
}
