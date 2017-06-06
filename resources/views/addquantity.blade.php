@extends('layouts.app')

@section('content')
<div class="container">


        {{ Form::open(array('action' => array('StockController@updateQuantity', $stockItem->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
    
    <fieldset>
 
        <legend>Agregar cantidad</legend>
        

        <!-- Quantity -->
        <div class="form-group">
            {!! Form::label('quantity', 'Cantidad:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('quantity', $value = null, ['class' => 'form-control', 'placeholder' => 'Agregar cantidad']) !!}
            </div>
        </div>
       
        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Guardar', ['class' => 'btn btn-lg btn-info'] ) !!}
            </div>
        </div>
 
    </fieldset>
 
    {!! Form::close()  !!}
        
</div>
@endsection
   