<html>

@extends('layouts.loggedin')
@section('reg')

     
    <form action="{{route('update.submitt')}}" method="post">
      {{csrf_field()}}
        <input type="hidden" name="id" value="{{$t->id}}"  placeholder="ID"><br>
        
        <input type="text" name="name" value="{{$t->name}}"  placeholder="name"><br>
        {{-- @error('username')
           <span class="text-danger">{{$message}}</span><br>
        @enderror --}}
        <input type="text" name="skill" value="{{$t->skill}}"  placeholder="skill"><br>
        {{-- @error('email')
           <span class="text-danger">{{$message}}</span><br>
        @enderror --}}
      
        
       <input type="submit" value="Update"> 
     


    </form>
@endsection('reg')    
     
</html> 
    