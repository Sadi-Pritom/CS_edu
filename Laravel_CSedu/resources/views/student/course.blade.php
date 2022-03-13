@extends('layouts.loggedin')
@section('listt')
<h1>list</h1>
<span class="text-success">{{Session::get('msg')}}</span>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Teacher</th>
      <th scope="col">Price</th>
      <th>Enroll
    </tr>
  </thead>
  <tbody>
  
@foreach($courses as $c)
<tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->name}}</td>
      <td>{{$c->teacher}}</td>
      <td>{{$c->price}}</td>
      <td> <button>
        <a href ="{{route('enroll',$c->id)}}" class="btn btn-success" type="submit">Enroll</a>     
      </button> </td>
    
    </tr>
@endforeach
    
  </tbody>
</table>



<h1>hello</h1>

@endsection('listt')