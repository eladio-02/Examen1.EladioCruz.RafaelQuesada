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
    public function edit($id)
    {
        return view('/editclient', ['client' => Cliente::find($id)] );
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
        $fecha = date("Y/m/d");
        $data = Input::all();
        $client = Cliente::find($id);
        if(!is_null($client)){ 
            $client->name = $data['name'];
            $client->apellido = $data['apellidos'];
            $client->birthday = $data['birthday'];
            $client->status = $data['Status'];
            $client->sexo = $data['Tipo'];
            $client->active = 1;
            $client->discount = $data['discount'];
            $client->date1 = $fecha;
            $client->save();
            return redirect('/clientes'); 
        }
        else{
            return redirect('/clientes');
        }
        return redirect('/clientes');
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
