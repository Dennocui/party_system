@extends('layouts.app')



@section('content')
<div class="row">
<a href="/contributions" class="btn btn-primary"> Go Back</a>
</div>
<br>

<h2>Member Name: {{ $contribution->member->f_name }} {{ $contribution->member->l_name }}</h2>
<h3>Payment Code: {{ $contribution->payment_code }}</h3>
<h3>Amount: {{ $contribution->amount }}</h3>
<h3>Day Added: {{ $contribution->created_at }}</h3>
<hr>

<div class="row">
<a href="/contributions/{{$contribution->id}}/edit" class="btn btn-success">Edit</a>

&nbsp;


{!! Form::open(['action' => ['ContributionsController@destroy', $contribution->id], 'method' => 'POST', 'onsubmit' => 'return confirmDelete()']) !!}

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}


{!! Form::close() !!}
</div>

@endsection