@extends('layouts.app')

@section('content')



<div class="row flex-nowrap justify-content-between align-items-center">
          
    <h5><u>Contributions</u></h5>
  
    <div class="justify-content-end align-items-center">
      
      <a class="btn btn-sm btn-outline-secondary" href="/contributions/create">Add New</a>
    </div>
  </div>
  <br>
    
  
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Member Name</th>
            <th>Payment Code</th>
            <th>Amount(KSH)</th>
            
            <th>Founded</th>
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         @if(count($contributions) > 0)
                  @foreach($contributions as $c)
          <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->member->f_name}} {{$c->member->l_name}} </td>
            <td>{{$c->payment_code}}</td>
            <td>{{$c->amount}}</td>
            
            <td>{{$c->created_at}}</td>
           

            
            <td >
                 <a class="btn btn-sm btn-outline-secondary" href="/contributions/{{$c->id}}">View</a>
            </td>
          </tr>
           
      
     
      @endforeach
     
      @else
        
        </tbody>
      </table>
    
    
    <p>No Contributions Found</p>
@endif
</div>

@endsection