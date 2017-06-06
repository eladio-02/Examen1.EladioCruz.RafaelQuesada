@extends('layouts.app')

@section('content')
<div class="container">
        <button class="btn btn-info" 
                        onclick="location.href= '/product/create' ">
                        Añadir Producto</button>
    
        <table class="table">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Unidades</th>
                <th>Tax</th>
                <th>Family</th>
                <th>Fabrica</th>
                <th>Tipo</th>
                <th>Departamento</th>
                <th>Acciones</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($producto as $product)
                @if($product->active == 1)      
                        <tr class="success">                    
                    
                    <td>{{$product->name}}</td>
                    <td>{{$product->brand}}</td>
                    <td>{{$product->unity}}</td>
                    <td>{{$product->tax}}</td>
                    <td>{{$product->family}}</td>
                    <td>{{$product->factory}}</td>
                    <td>{{$product->type}}</td>
                    <td>{{$product->departamento}}</td>
                        <td>
                                @if (!Auth::user()->type==0)
                            <button class="btn btn-danger" 
                            onclick="location.href= '/product/delete/{{$product->id}}' ">
                            
                            Deshabilitar</button>
                                
                                <button onclick="location.href= '/product/edit/{{$product->id}}' " 
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
   

