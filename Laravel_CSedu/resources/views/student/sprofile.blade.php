<span class="text-success">{{Session::get('msg')}}</span>

@extends('layouts.loggedin')
@section('gett')


<h1>Profile</h1>

<?php
///echo session()->get('username');

?>
<table border="1">
           

                 <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                       
                    </tr>
                    
                        <tr>
                            <td>{{$st->name}}</td>
                            <td>{{$st->id}}</td>
                            <td>{{$st->email}}</td>
                            <td>{{$st->username}}</td>
                             
                             <td><a class="btn btn-primary" href="{{route('students.edit',['id'=>encrypt($st->id)])}}">Edit</a></td>
                        </tr>
                      
    </table>  
    {{-- @foreach ($st->enroll as $se)
        <h1>{{$se->course_id}}</h1>
        @foreach ($se->course as $sc )
            <h1>{{$sc->name}} </h1>
        @endforeach
        {{$se->course->name}}
    @endforeach
    <h1> {{$st->course}}</h1> --}}

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
  
@foreach($st->enroll as $se)
<tr>
      <th scope="row">{{$se->course->id}}</th>
      <td>{{$se->course->name}}</td>
      <td>{{$se->course->teacher}}</td>
      <td>{{$se->course->price}}</td>
      
    
    </tr>
@endforeach
    
  </tbody>
    

@endsection('gett')