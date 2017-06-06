@extends('layouts.app')

@section('content')
<div class="container">
        {!! Form::open(['url' => '/stock/insert', 'class' => 'form-horizontal']) !!}
    
    <fieldset>
 
        <legend>Crear nuevo item del inventario</legend>
        
        <!-- ID -->
        <div class="form-group">
            {!! Form::label('product_id', 'Product ID:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('product_id', $value = null, ['class' => 'form-control', 'placeholder' => 'Product ID']) !!}
            </div>
        </div>

        <!-- Quantity -->
        <div class="form-group">
            {!! Form::label('quantity', 'Quantity:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('quantity', $value = null, ['class' => 'form-control', 'placeholder' => 'Quantity']) !!}
            </div>
        </div>

        <!-- Min Quantity -->
        <div class="form-group">
            {!! Form::label('min_quantity', 'Min Quantity:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('min_quantity', $value = null, ['class' => 'form-control', 'placeholder' => 'Min Quantity']) !!}
            </div>
        </div>

        <!-- Max Quantity -->
        <div class="form-group">
            {!! Form::label('max_quantity', 'Max Quantity:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('max_quantity', $value = null, ['class' => 'form-control', 'placeholder' => 'Max Quantity']) !!}
            </div>
        </div>

        <!-- Gravado -->
        <div class="form-group">
            {!! Form::label('gravado', 'Gravado:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('gravado', $value = null, ['class' => 'form-control', 'placeholder' => 'Gravado']) !!}
            </div>
        </div>
 
        

        
 
        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info'] ) !!}
            </div>
        </div>
 
    </fieldset>
 
    {!! Form::close()  !!}
        
</div>
@endsection
   

