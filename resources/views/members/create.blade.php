@extends('layouts.app')



@section('content')
<h1>Add Member</h1>


    {!! Form::open(['action' => 'MembersController@store', 'method'=> 'POST']) !!}
<div class="row">
    
    
    <div class="col-md-4">
        <div class="form-group">
            {{Form::Label('f_name','First Name')}}
            {{Form::text('f_name', '', ['class'=>'form-control', 'placeholder'=> 'First Name'])}}
        </div>
    </div>
    
    <div class="col-md-4">
            <div class="form-group">
                {{Form::Label('l_name','Last Name')}}
                {{Form::text('l_name', '', ['class'=>'form-control', 'placeholder'=> 'Last Name'])}}
        </div>
    </div>

    <div class="col-md-4">
            <div class="form-group">
                    <label class="control-label col-md-3">{{ __('Gender') }}</label>
                    <div class="col-md-9">
                    <div class="radio-list">
                
                <label class="radio-inline"> 
                {{Form::Label('gender', 'Male')}}
                {{Form::radio('gender','Male',   ['class'=>'form-control'])}} 
                </label>
                
                <label class="radio-inline"> 
                {{Form::Label('gender', 'Female')}}
                {{Form::radio('gender','Female', ['class'=>'form-control'])}} 
                </label>
                
                       
                
                    </div>

                    
                    </div>
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
                {{Form::Label('location','Location')}}
                {{Form::text('location', '', ['class'=>'form-control', 'placeholder'=> 'Location'])}}
        </div>
    </div>

    


    
</div>



    <div class="row">   
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            
    
        {!! Form::close() !!}
        &nbsp;
        <br>
        
                <a href="/members" class="btn btn-warning"> Cancel</a>
                
                </div>
                
    



@endsection