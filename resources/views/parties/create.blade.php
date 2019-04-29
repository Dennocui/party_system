@extends('layouts.app')



@section('content')
<h1>Add Party</h1>


    {!! Form::open(['action' => 'PartiesController@store', 'method'=> 'POST']) !!}
<div class="row">
    
    
    <div class="col-md-4">
        <div class="form-group">
            {{Form::Label('party_name','Party Name')}}
            {{Form::text('party_name', '', ['class'=>'form-control', 'placeholder'=> 'Party Name'])}}
        </div>
    </div>

    <div class="col-md-4">
            <div class="form-group">
                {{Form::Label('phone_number','Phone Number')}}
                {{Form::text('phone_number', '', ['class'=>'form-control', 'placeholder'=> 'Phone Number'])}}
            </div>
        </div>
    

    <div class="col-md-4">
        <div class="form-group">
            {{Form::Label('email', 'Email')}}
            {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=> 'Email'])}}
        </div>
    </div>



    <div class="row">   
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            
    
        {!! Form::close() !!}
    
        <br>
                <a href="/parties" class="btn btn-warning"> Cancel</a>
                
                </div>
                
    



@endsection