@extends('layouts.app')



@section('content')
<h1>Add Membership for {{$member->f_name}} {{$member->l_name}}</h1>


    {!! Form::open(['action' => 'MembershipsController@store', 'method'=> 'POST']) !!}
<div class="row">
    
    
   
    <div class="col-md-4">
            <div class="form-group">
                {{Form::Label('start_date','Start Date')}}
                {{Form::date('start_date', '', ['class'=>'form-control', 'placeholder'=> 'Phone Number'])}}
        </div>
    </div>

    <div class="col-md-4">
            <div class="form-group">
                {{Form::Label('end_date','End Date')}}
                {{Form::date('end_date', '', ['class'=>'form-control', 'placeholder'=> 'Phone Number'])}}
        </div>
    </div>

    <div class="col-md-4">
            <div class="form-group">
                {{Form::Label('party','Party')}}
                {{Form::select('party', $parties, '', ['class'=>'form-control', 'placeholder'=> 'Parties'])}}
        </div>
    </div>

    {{Form::hidden('member', $member->id)}}


    
</div>



    <div class="row">   
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            
    
        {!! Form::close() !!}
        &nbsp;
        <br>
        
                <a href="/members" class="btn btn-warning"> Cancel</a>
                
                </div>
                
    



@endsection