@extends('layouts.loggedin')
@section('listt')
<h1>Courses</h1>
<span class="text-success">{{Session::get('msg')}}</span>
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
  
@foreach($courses as $c)
<tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->name}}</td>
      <td>{{$c->teacher}}</td>
      <td>{{$c->price}}</td>
      
    
    </tr>
@endforeach
    
  </tbody>
</table>





@endsection('listt')