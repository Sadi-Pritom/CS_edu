@extends('layouts.loggedin')
@section('gett')


<h1>get</h1>

<?php
///echo session()->get('username');

?>
<table border="1">
           

                 <tr>
                        <th>Name</th>
                        <th>ID</th>
                        
                        <th>Username</th>
                         <th>Skill</th>

                       
                    </tr>
                    
                        <tr>
                            <td>{{$t->name}}</td>
                            <td>{{$t->id}}</td>
                            <td>{{$t->username1}}</td>
                            <td>{{$t->skill}}</td>
                             
                             <td><a class="btn btn-primary" href="{{route('teachers.edit',['id'=>encrypt($t->id)])}}">Edit</a></td>
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