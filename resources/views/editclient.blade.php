@extends('layouts.app')

@section('content')
<div class="container">
        {{ Form::open(array('action' => array('ClienteController@update', $client->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

    
    <fieldset>
 
        <legend>Edit {{$client->name}}</legend>
        
        <div class="form-group">
            {!! Form::label('id', 'ID:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('id', $value = null, ['class' => 'form-control', 'placeholder' => 'ID']) !!}
            </div>
        </div>

        <!-- Name -->
        <div class="form-group">
            {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>

        <!-- Apellido -->
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('apellidos', $value = null, ['class' => 'form-control', 'placeholder' => 'Apellidos']) !!}
            </div>
        </div>

        <!-- Birthday -->
        <div class="form-group">
            {!! Form::label('birthday', 'Birthday:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::date('birthday', $value = null, ['class' => 'form-control', 'placeholder' => 'Birthday']) !!}
            </div>
        </div>
 
        

        <!-- Sexo -->
        <div class="form-group">
            {!! Form::label('radios', 'Sexo', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('radio1', 'Masculino') !!}
                    {!! Form::radio('Tipo', 'Masculino', true, ['id' => 'Masculino']) !!}
 
                </div>
                <div class="radio">
                    {!! Form::label('radio2', 'Femenino') !!}
                    {!! Form::radio('Tipo', 'Femenino', false, ['id' => 'Femenino']) !!}
                </div>
            </div>
        </div>

        <!-- Status -->
        <div class="form-group">
            {!! Form::label('radios', 'Status', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('radio1', 'Casado') !!}
                    {!! Form::radio('Status', 'Casado', true, ['id' => 'Casado']) !!}
 
                </div>
                <div class="radio">
                    {!! Form::label('radio2', 'Soltero') !!}
                    {!! Form::radio('Status', 'Soltero', false, ['id' => 'Soltero']) !!}
                </div>
            </div>
        </div>
        <!-- Discount -->
        <div class="form-group">
            {!! Form::label('discount', 'Discount:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('discount', $value = null, ['class' => 'form-control', 'placeholder' => 'Discount']) !!}
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