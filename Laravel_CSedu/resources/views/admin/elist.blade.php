{{-- <span class="text-success">{{Session::get('msg')}}</span> --}}
@extends('layouts.loggedin')
@section('listt')

<br>
<h3 style="color:Tomato" align="center">Enrolls</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Enroll ID</th>
      <th scope="col">Student ID</th>
      
      <th scope="col">Student Name </th>
      <th scope="col">Student's Username</th>
      <th scope="col">Course Name </th>
      <th scope="col">Course ID </th>
      <th scope="col">Course Teacher's Name</th>
      <th scope="col">Registration Date</th>
      
      
    </tr>
  </thead>
  <tbody>
  
@foreach($ee as $e)
<tr>
      <th scope="row">{{$e->id}}</th>
      <td>{{$e->student_id}}</td>
       <td>{{$e->student->name}}</td>
      <td>{{$e->student->username}}</td>
      <td>{{$e->course->name}}</td>
       <td>{{$e->course_id}}</td>
       <td>{{$e->course->teacher}}</td>
      <td>{{$e->updated_at}}</td>
      
       <td> <button>
        <a href ="{{route('edelete',$e->id)}}" class="btn btn-danger" type="submit">Delete</a>     
      </button> </td>
    
    </tr>
@endforeach
    
  </tbody>
</table>





@endsection('listt')