@extends('layouts.app')



@section('content')
<div class="row">
<a href="/members" class="btn btn-primary"> Go Back</a>
</div>
<br>

<h2>Member Name: {{ $member->f_name }} {{ $member->l_name }}</h2>
<h3>Gender: {{ $member->gender }}</h3>
<h3>Phone Number: {{ $member->phone_number }}</h3>
<h3>Location: {{ $member->location }}</h3>
<h3>Party: </h3>
<hr>

<div class="row">




<a href="/members/{{$member->id}}/edit" class="btn btn-success">Edit</a>

&nbsp;


{!! Form::open(['action' => ['MembersController@destroy', $member->id], 'method' => 'POST', 'onsubmit' => 'return confirmDelete()']) !!}

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}


{!! Form::close() !!}
&nbsp;

<a href="/memberships/{{$member->id}}" class="btn btn-primary">Membership</a>
</div>

@endsection