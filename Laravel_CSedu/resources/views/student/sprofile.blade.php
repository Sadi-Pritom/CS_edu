<span class="text-success">{{Session::get('msg')}}</span>

@extends('layouts.loggedin')
@section('gett')


<h1 style="color:Tomato" >Profile</h1>

<?php
///echo session()->get('username');

?>
{{-- <table border="1">
           

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
                      
    </table>   --}}
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody> 
  

    <tr>
      <th scope="row">{{$st->id}}</th>
      <td>{{$st->name}}</td>
      <td>{{$st->username}}</td>
      <td>{{$st->email}}</td>
       <td><a class="btn btn-primary" href="{{route('students.edit',['id'=>encrypt($st->id)])}}">Edit</a></td>

      
    
    </tr>

    
  </tbody>
  </table>






<h3 style="color:Tomato">Your Courses</h3>





   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Course ID</th>
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
    </table>

@endsection('gett')