@extends('layouts.app')

@section('content')
<div class="container">
     
    
        {{ Form::open(array('action' => array('UserController@update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
    <fieldset>
 
        <legend>Edit user {{$user->username}}</legend>
        
        
        <!-- Password -->
        <div class="form-group">
            {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
                
            </div>
        </div>

        <!-- Tipo Usuarios -->
        <div class="form-group">
            {!! Form::label('radios', 'Type', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('radio1', 'Administrador') !!}
                    {!! Form::radio('Tipo', 'option1', true, ['id' => 'Administrador']) !!}
 
                </div>
                <div class="radio">
                    {!! Form::label('radio2', 'Usuario') !!}
                    {!! Form::radio('Tipo', 'option2', false, ['id' => 'Usuario']) !!}
                </div>
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
   

