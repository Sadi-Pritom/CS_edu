{{-- <span class="text-success">{{Session::get('msg')}}</span>
@extends('layouts.loggedin')
@section('listt') --}}


<h1>Downloaded Course List</h1>
   


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Teacher</th>
      
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
  
            @foreach($c as $cc)
            <tr>
                <th scope="row">{{$cc->id}}</th>
                <td>{{$cc->name}}</td>
                <td>{{$cc->teacher}}</td>
                
                <td>{{$cc->price}}</td>
                
                
                </tr>
            @endforeach


    
  </tbody>
</table>





{{-- @endsection('listt') --}}