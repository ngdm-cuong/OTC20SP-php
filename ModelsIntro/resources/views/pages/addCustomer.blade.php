@extends('layout.app')

@section('content')
    <h1>A Customer</h1>
    {!! Form::open(['action' => ['CustomersController@store'], 'method' => 'post']) !!}
    <div class = "form-row">
        <div class="form-group col-md-8">
            {{FORM::label('firstName', 'First Name',['class'=>'control-label'])}}
            {{Form::text('firstName','', ['class'=>'form-control','placeholder'=>'Please enter first name'])}}
        </div>  
    </div>

    <div class = "form-row">
        <div class="form-group col-md-8">
            {{FORM::label('lasttName', 'Last Name',['class'=>'control-label'])}}
            {{Form::text('lastName','', ['class'=>'form-control','placeholder'=>'Please enter last name'])}}
        </div>  
    </div>


    <div class = "form-row">
        <div class="form-group col-md-8">
            {{FORM::label('address', 'Address',['class'=>'control-label'])}}
            {{Form::text('address','', ['class'=>'form-control','placeholder'=>'Please enter Address'])}}
        </div>  
    </div>  


    <div class = "form-row">
        <div class="form-group col-md-4">
            {{FORM::label('city', 'City',['class'=>'control-label'])}}
            {{Form::text('city','', ['class'=>'form-control','placeholder'=>'Please enter city'])}}
        </div>  
    
        <div class="form-group col-md-2">
            {{FORM::label('state', 'State',['class'=>'control-label'])}}
            {{Form::text('state','', ['class'=>'form-control','placeholder'=>'Please enter state'])}}
        </div>  
        <div class="form-group col-md-2">
            {{FORM::label('zip', 'Zip Code',['class'=>'control-label'])}}
            {{Form::text('zip','', ['class'=>'form-control','placeholder'=>'Please enter Zip Code'])}}
        </div>  
    </div>

    

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection