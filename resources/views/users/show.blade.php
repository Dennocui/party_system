@extends('layouts.app')



@section('content')
<div class="row">
<a href="/users" class="btn btn-primary"> Go Back</a>
</div>
<br>

<h2>User Name: {{ $user->name }} </h2>
<h3>Email: {{ $user->email }}</h3>
<h3>Date Created: {{ $user->created_at }}</h3>
<h3>Role: {{ $user->roles[0]->name }}</h3>
<hr>

<div class="row">
<a href="/users/{{$user->id}}/edit" class="btn btn-success">Edit</a>

&nbsp;


{!! Form::open(['action' => ['HomeController@destroy', $user->id], 'method' => 'POST', 'onsubmit' => 'return confirmDelete()']) !!}

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}


{!! Form::close() !!}
</div>

@endsection