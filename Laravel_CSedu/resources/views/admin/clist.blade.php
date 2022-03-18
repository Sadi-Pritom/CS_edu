<span class="text-success">{{Session::get('msg')}}</span>
@extends('layouts.loggedin')
@section('listt')


<h1>All Courses</h1>
<a class="btn btn-success"href="{{route('pdf')}}">Export As PDF</a>

<form action="{{route('searchRecord')}}" method="post">
      {{csrf_field()}}
        <input type="text" name="name" placeholder="Name"><br>
        <input type="submit" value="search" ><br>

   </form>     


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Teacher</th>
      <th scope="col">Teacher's Username</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
  
@foreach($cc as $c)
<tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->name}}</td>
      <td>{{$c->teacher}}</td>
       <td>{{$c->teacher_uname}}</td>
      <td>{{$c->price}}</td>
      <td> <button>
        <a href ="{{route('cdelete',$c->id)}}" class="btn btn-success" type="submit">Delete</a>     
      </button> </td>
    
    </tr>
@endforeach
    
  </tbody>
</table>





@endsection('listt')