@extends('layouts.app')

@section('content')



<div class="row flex-nowrap justify-content-between align-items-center">
          
    <h5><u>Members</u></h5>
    <div class="justify-content-end align-items-center">
      
      <a class="btn btn-sm btn-outline-secondary" href="/members/create">Add New</a>
    </div>
  </div>
  <br>
    
  
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Location</th>
            <th>Phone Number</th>
            <th>Party</th>
            <th>Joined</th>
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         @if(count($members) > 0)
                  @foreach($members as $m)
          <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->f_name}} {{$m->l_name}}</td>
            <td>{{$m->gender}}</td>
            <td>{{$m->location}}</td>
            <td>{{$m->phone_number}}</td>
            <td>{{$m}}</td>
            <td>{{$m->created_at}}</td>
           

            
            <td >
                 <a class="btn btn-sm btn-outline-secondary" href="/members/{{$m->id}}">View</a>
            </td>
          </tr>
           
      
     
      @endforeach
     
      @else
        
        </tbody>
      </table>
    
    
    <p>No Members Found</p>
@endif
</div>

@endsection