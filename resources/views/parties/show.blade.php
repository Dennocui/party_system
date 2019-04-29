@extends('layouts.app')



@section('content')
<div class="row">
<a href="/parties" class="btn btn-primary"> Go Back</a>
&nbsp;
    <a href="/parties/{{$party->id}}/edit" class="btn btn-success">Edit</a>
    &nbsp;
    
    {!! Form::open(['action' => ['PartiesController@destroy', $party->id], 'method' => 'POST', 'onsubmit' => 'return confirmDelete()']) !!}
    
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    </div>

<br>

<h4>Party Name: {{ $party->party_name }}</h4>
<h4>Phone Number: {{ $party->phone_number }}</h4>
<h4>Email: {{ $party->email }}</h4>
<hr>

{!! Form::close() !!}




@endsection