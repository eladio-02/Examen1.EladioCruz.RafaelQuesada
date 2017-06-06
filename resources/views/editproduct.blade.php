@extends('layouts.app')

@section('content')
<div class="container">





        {{ Form::open(array('action' => array('ProductController@update', $product->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

    
    <fieldset>
 
        <legend>Edit {{$product->name}} {{$product->id}}</legend>

        <!-- Name -->
        <div class="form-group">
            {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>


        <!-- Brand -->
        <div class="form-group">
            {!! Form::label('brand', 'Brand:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('brand', $value = null, ['class' => 'form-control', 'placeholder' => 'Brand']) !!}
            </div>
        </div>
        <!-- Family -->
        <div class="form-group">
            {!! Form::label('family', 'Family:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('family', $value = null, ['class' => 'form-control', 'placeholder' => 'Family']) !!}
            </div>
        </div>
        <!-- Factory -->
        <div class="form-group">
            {!! Form::label('factory', 'Factory:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('factory', $value = null, ['class' => 'form-control', 'placeholder' => 'Factory']) !!}
            </div>
        </div>
        <!-- Brand -->
        <div class="form-group">
            {!! Form::label('brand', 'Brand:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('brand', $value = null, ['class' => 'form-control', 'placeholder' => 'Brand']) !!}
            </div>
        </div>
        <!-- Family -->
        <div class="form-group">
            {!! Form::label('departamento', 'Departamento:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('departamento', $value = null, ['class' => 'form-control', 'placeholder' => 'Departamento']) !!}
            </div>
        </div>
        
        <!-- Type -->
        <div class="form-group">
            {!! Form::label('type', 'Tipo:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('type', $value = null, ['class' => 'form-control', 'placeholder' => 'Tipo']) !!}
            </div>
        </div>
        
        

        <!-- Unity -->
        <div class="form-group">
            {!! Form::label('unity', 'Unity:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('unity', $value = null, ['class' => 'form-control', 'placeholder' => 'unity']) !!}
            </div>
        </div>
        <!-- Tax -->
        <div class="form-group">
            {!! Form::label('tax', 'Tax:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::number('tax', $value = null, ['class' => 'form-control', 'placeholder' => 'Tax']) !!}
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
   
