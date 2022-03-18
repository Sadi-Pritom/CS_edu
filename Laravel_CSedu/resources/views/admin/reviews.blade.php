@extends('layouts.loggedin')
@section('gett')
<h1>Reviews</h1>
 
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

</table>



    

@endsection('gett')