<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/users', ['usuarios' => User::all() ] );
    }

    public function createUser()
    {
        return view('/newusers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data = Input::all();
       $tipo=0;
       error_log($data['Tipo']);
       if($data['Tipo']=="Administrador"){
           $tipo = 1;

       }

       User::create([
           'username' => $data['username'],
           'password' => bcrypt($data['password']),
           'type' => $tipo,
           'active' => 1,
       ]);
       return redirect('/users'); 
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/edituser', ['user' => User::find($id)] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
        $fecha = date("Y/m/d");
        $data = Input::all();
        $user = User::find($id);
        $tipo=0;
        if($data['Tipo']=="Administrador"){
            $tipo = 1;

        }

        if(!is_null($user)){ 
            $user->username = $user->username;
            $user->password = bcrypt($data['password']);
            $user->type = $tipo;
            
            $user->save();
            return redirect('/users'); 
        }
        else{
            return redirect('/users');
        }
        return redirect('/users'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('/users'); 
    }
}
