@extends('layouts.app')

@section('content')
<div class="container">
        <button class="btn btn-info" 
                        onclick="location.href= '/stock/create' ">
                        Add Product</button>
    
        <table class="table">
            <thead>
            <tr>

                <th>Product Id</th>
                <th>Quantity</th>
                <th>Min Quantity</th>
                <th>Max Quantity</th>
                <th>Gravado</th>
                <th>Fecha</th>
                

            </tr>
            </thead>
            <tbody>
            
            @foreach ($stock as $stockItem)
                    <tr class="success">                    
                    
                    <td>{{$stockItem->product_id}}</td>
                    <td>{{$stockItem->quantity}}</td>
                    
                    <td>{{$stockItem->min_quantity}}</td>
                    <td>{{$stockItem->max_quantity}}</td>
                    <td>{{$stockItem->gravado}}</td>
                    <td>{{$stockItem->date1}}</td>
                    

                        <td>
                                
                            <button class="btn btn-danger" 
                            onclick="location.href= '/stock/delete/{{$stockItem->id}}' ">
                            
                            Eliminar</button>
                                
                                <button onclick="location.href= '/stock/edit/{{$stockItem->id}}' " 
                                class="btn btn-success">Editar</button>
                        </td>
                    </tr>
            
        @endforeach
        </tbody>
        </table>
        
</div>
@endsection