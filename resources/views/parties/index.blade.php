@extends('layouts.app')

@section('content')



<div class="row flex-nowrap justify-content-between align-items-center">
          
    <h5><u>Parties</u></h5>
  
    <div class="justify-content-end align-items-center">
      
      <a class="btn btn-sm btn-outline-secondary" href="/parties/create">Add New</a>
    </div>
  </div>
  <br>
    
  
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Party Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Founded</th>
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         @if(count($parties) > 0)
                  @foreach($parties as $p)
          <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->party_name}}</td>
            <td>{{$p->phone_number}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->created_at}}</td>
           

            
            <td >
                 <a class="btn btn-sm btn-outline-secondary" href="/parties/{{$p->id}}">View</a>
            </td>
          </tr>
           
      
     
      @endforeach
     
      @else
        
        </tbody>
      </table>
    
    
    <p>No Parties Found</p>
@endif
</div>

@endsection