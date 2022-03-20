<span class="text-success">{{Session::get('msg')}}</span>
@extends('layouts.loggedin')
@section('gett')
<br>

<h3 style="color:Tomato">Admin's Profile</h3>

<?php
///echo session()->get('username');

?>
<table  border="1">
           

                 <tr>
                        <th>Name</th>
                        <th>ID</th>
                        
                        <th>Username</th>
                         <th>Email</th>

                       
                    </tr>
                    
                        <tr>
                            <td>{{$a->name}}</td>
                            <td>{{$a->id}}</td>
                            <td>{{$a->username2}}</td>
                            <td>{{$a->email}}</td>
                             
                             <td><a class="btn btn-primary" href="{{route('editadmin',['id'=>encrypt($a->id)])}}">Edit</a></td>
                        </tr>
                      
    </table>  
    

    {{-- <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Skill</th>
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
    
  </tbody> --}}
    

@endsection('gett')