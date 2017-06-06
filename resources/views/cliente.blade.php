@extends('layouts.app')

@section('content')
<div class="container">
        <button class="btn btn-info" 
                        onclick="location.href= '/cliente/create' ">
                        Añadir Cliente</button>
    
        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Sexo</th>
                <th>Descuento</th>
                <th>Estado Civil</th>
                <th>Nacimiento</th>
                

            </tr>
            </thead>
            <tbody>
            
            @foreach ($clientes as $cliente)
                @if($cliente->active == 1)   
                    <tr class="success">                    
                    
                    <td>{{$cliente->name}}</td>
                    <td>{{$cliente->apellido}}</td>
                    
                    <td>{{$cliente->sexo}}</td>
                    <td>{{$cliente->discount}}</td>
                    <td>{{$cliente->status}}</td>
                    <td>{{$cliente->birthday}}</td>
                    

                        <td>
                                @if (!Auth::user()->type==0)
                            <button class="btn btn-danger" 
                            onclick="location.href= '/cliente/delete/{{$cliente->id}}' ">
                            
                            Eliminar</button>
                                
                                <button onclick="location.href= '/cliente/edit/{{$cliente->id}}' " 
                                class="btn btn-success">Editar</button>
                                @endif
                        </td>
                    </tr>
                @endif
            
        @endforeach
        </tbody>
        </table>
        
</div>
@endsection
   

