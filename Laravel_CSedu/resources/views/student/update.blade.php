<html>

@extends('layouts.loggedin')
@section('reg')

     
    <form action="{{route('update.submit')}}" method="post">
      {{csrf_field()}}
        <input type="hidden" name="id" value="{{$student->id}}"  placeholder="ID"><br>
        
        <input type="text" name="username" value="{{$student->username}}"  placeholder="Username"><br>
        @error('username')
           <span class="text-danger">{{$message}}</span><br>
        @enderror
        <input type="text" name="email" value="{{$student->email}}"  placeholder="Email"><br>
        @error('email')
           <span class="text-danger">{{$message}}</span><br>
        @enderror
      
        
       <input type="submit" value="Update"> 
     


    </form>
@endsection('reg')    
     
</html> 
    