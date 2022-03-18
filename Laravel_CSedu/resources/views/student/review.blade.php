@extends('layouts.loggedin')
@section('gett')
{{-- <h1>Reviews</h1> --}}
  {{-- <h4>Name: {{$st->name}} </h4>
<h4>ID: {{$st->id}} </h4>  --}}

{{-- @foreach($st->review as $sr)

<h1> {{$sr->rev}} </h1>
@endforeach --}}

{{-- @foreach($st as$s )
    @foreach ($s->review as $sr)
        <h3>{{$sr->rev}}</h3>
    @endforeach

@endforeach

<button ><a href="{{route('addReview')}}">ADD review</a></button> --}}


    









<h3 style="color:Tomato" align="center">Reviews</h3>





   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Review</th>
      
    </tr>
  </thead>
  <tbody> 
  
 @foreach($st as $s)
      @foreach ($s->review as $sr)
<tr>
      <th scope="row">{{$sr->student->id}}</th>
      <td>{{$sr->student->name}}</td>
      <td>{{$sr->rev}}</td>
      
      
    
   </tr>
    @endforeach
@endforeach
 <a class="btn btn-primary"href="{{route('addReview')}}">Add Review</a>

    
  </tbody>
    </table>



@endsection('gett')