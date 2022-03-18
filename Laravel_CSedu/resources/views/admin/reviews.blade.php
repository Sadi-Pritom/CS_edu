@extends('layouts.loggedin')
@section('gett')


{{-- <h1>Reviews</h1>
 
<table align=>
<tr>
   <th>Student id</th>
   <th>Review</th>
  </tr> 
  <tr>
   <td> @foreach($st as$s )
          @foreach ($s->review as $sr)
              <h3>{{$sr->st_id}}</h3>
          @endforeach

          @endforeach</td>
    <td>
        @foreach($st as$s )
          @foreach ($s->review as $sr)
              <h3>{{$sr->rev}}</h3>
          @endforeach

          @endforeach
   </td>
  </tr> 

</table> --}}

<br>


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

    
  </tbody>
    </table>



    

@endsection('gett')