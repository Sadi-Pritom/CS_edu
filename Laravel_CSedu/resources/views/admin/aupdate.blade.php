<html>

@extends('layouts.loggedin')
@section('reg')

     
    <form action="{{route('updateaa')}}" method="post">
      {{csrf_field()}}
        <input type="hidden" name="id" value="{{$a->id}}"  placeholder="ID"><br>
        
        <input type="text" name="name" value="{{$a->name}}"  placeholder="Name"><br>
        {{-- @error('username')
           <span class="text-danger">{{$message}}</span><br>
        @enderror --}}
        <input type="text" name="email" value="{{$a->email}}"  placeholder="Email"><br>
        {{-- @error('email')
           <span class="text-danger">{{$message}}</span><br>
        @enderror --}}
      
        
       <input type="submit" value="Update"> 
     


    </form>
@endsection('reg')    
     
</html> 
    