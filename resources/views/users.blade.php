@extends('layouts.app')

@section('content')
<div class="container">
        <button class="btn btn-info" 
                        onclick="location.href= '/user/create' ">
                        Añadir Usuario</button>
    
        <table class="table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Type</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $user)
                    <tr class="success">                    
                    
                    <td>{{$user->username}}</td>
                    @if($user->type == 1)  
                        <td>Administrador</td>
                    @else
                        <td>Usuario</td>
                    @endif

                        <td>
                                
                            <button class="btn btn-danger" 
                            onclick="location.href= '/user/delete/{{$user->id}}' ">
                            
                            Eliminar</button>
                                
                                <button onclick="location.href= '/user/edit/{{$user->id}}' " 
                                class="btn btn-success">Editar</button>
                        </td>
                    </tr>
            
        @endforeach
        </tbody>
        </table>
        
</div>
@endsection
   

