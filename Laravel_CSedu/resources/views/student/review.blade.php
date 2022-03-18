@extends('layouts.loggedin')
@section('gett')
<h1>Reviews</h1>
  {{-- <h4>Name: {{$st->name}} </h4>
<h4>ID: {{$st->id}} </h4>  --}}

{{-- @foreach($st->review as $sr)

<h1> {{$sr->rev}} </h1>
@endforeach --}}

@foreach($st as$s )
    @foreach ($s->review as $sr)
        <h3>{{$sr->rev}}</h3>
    @endforeach

@endforeach

<button ><a href="{{route('addReview')}}">ADD review</a></button>


    

@endsection('gett')