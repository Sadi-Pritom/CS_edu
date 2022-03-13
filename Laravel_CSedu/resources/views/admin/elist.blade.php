<span class="text-success">{{Session::get('msg')}}</span>
@extends('layouts.loggedin')
@section('listt')


<h1>All Courses</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student ID</th>
      <th scope="col">Course ID</th>
      <th scope="col">Registration Date</th>
      
      
    </tr>
  </thead>
  <tbody>
  
@foreach($ee as $e)
<tr>
      <th scope="row">{{$e->id}}</th>
      <td>{{$e->student_id}}</td>
      <td>{{$e->course_id}}</td>
       <td>{{$e->updated_at}}</td>
      
       <td> <button>
        <a href ="{{route('edelete',$e->id)}}" class="btn btn-success" type="submit">Delete</a>     
      </button> </td>
    
    </tr>
@endforeach
    
  </tbody>
</table>





@endsection('listt')