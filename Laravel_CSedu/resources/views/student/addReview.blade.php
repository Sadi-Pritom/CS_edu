@extends('layouts.loggedin')
@section('gett')
<h1>get</h1>
  {{-- <h4>Name: {{$st->name}} </h4>
<h4>ID: {{$st->id}} </h4>  --}}

{{-- @foreach($st->review as $sr)

<h1> {{$sr->rev}} </h1>
@endforeach --}}


      <form action="{{route('postReview')}}" method="post">
    {{@csrf_field()}}
        <input type="text"  name="rev" placeholder="Review"><br>
        
       {{-- <input type="submit" value="submit"> --}}
       <button type="submit" >Add Review</button> 
      


    </form>






@endsection('gett')