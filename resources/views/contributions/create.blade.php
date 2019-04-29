@extends('layouts.app')



@section('content')
<h1>Add Contribution</h1>


    {!! Form::open(['action' => 'ContributionsController@store', 'method'=> 'POST']) !!}
<div class="row">
    
    
    <div class="col-md-4">
        <div class="form-group">
            {{Form::Label('member_id','Member')}}
            {{Form::select('member_id', $members,'', ['class'=>'form-control'])}}
        </div>
    </div>

    <div class="col-md-4">
            <div class="form-group">
                {{Form::Label('payment_code','Payment Code')}}
                {{Form::text('payment_code', '', ['class'=>'form-control', 'placeholder'=> 'Payment Code'])}}
            </div>
        </div>
    

    <div class="col-md-4">
        <div class="form-group">
            {{Form::Label('amount', 'Amount')}}
            {{Form::number('amount', '', ['class'=>'form-control', 'placeholder'=> 'Amount'])}}
        </div>
    </div>



    <div class="row">   
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            
    
        {!! Form::close() !!}
        &nbsp;
        <br>
                <a href="/parties" class="btn btn-warning"> Cancel</a>
                
                </div>
                
    



@endsection