@extends('layouts.app')

@section('content')
<div class="container">
        {!! Form::open(['url' => '/user/insert', 'class' => 'form-horizontal']) !!}
    
    <fieldset>
 
        <legend>Create new user</legend>
        
        <!-- Name -->
        <div class="form-group">
            {!! Form::label('username', 'Username:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('username', $value = null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
            </div>
        </div>


 
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
                    {!! Form::radio('Tipo', 'Administrador', true, ['id' => 'Administrador']) !!}
 
                </div>
                <div class="radio">
                    {!! Form::label('radio2', 'Usuario') !!}
                    {!! Form::radio('Tipo', 'Usuario', false, ['id' => 'Usuario']) !!}
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
   

