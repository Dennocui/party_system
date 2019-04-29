@extends('layouts.app')

@section('content')



<div class="row flex-nowrap justify-content-between align-items-center">
          
    <h5><u>Users</u></h5>
  
    <div class="justify-content-end align-items-center">
      
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Add New</a>
    </div>
  </div>
  <br>
    
  
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            
            <th>Email</th>
            <th>Role</th>
            <th>Added</th>
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         @if(count($users) > 0)
                  @foreach($users as $u)
          <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            
            <td>{{$u->email}}</td>
            <td>{{$u->roles[0]->name}}</td>
            <td>{{$u->created_at}}</td>
           

            
            <td >
                 <a class="btn btn-sm btn-outline-secondary" href="/users/{{$u->id}}">View</a>
            </td>
          </tr>
           
      
     
      @endforeach
     
      @else
        
        </tbody>
      </table>
    
    
    <p>No Users Found</p>
@endif
</div>

@endsection