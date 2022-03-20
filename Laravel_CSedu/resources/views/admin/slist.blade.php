@extends('layouts.loggedin')
@section('listt')


{{-- <table border="1">
            
                <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Reg. Date</th>
                    </tr>
                    @foreach($students as $s)
                        <tr>
                            <td>{{$s->name}}</a></td>
                            <td>{{$s->id}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->username}}</td>
                             <td>{{$s->created_at}}</td>
                             <td> <button>
                            <a href ="{{route('sdelete',$s->id)}}" class="btn btn-success" type="submit">Delete</a>     
                        </button> </td>
                        </tr>
                    @endforeach  
    
</table>     --}}
<br>
<h3 style="color:Tomato" align="center">Students List </h3><br>
<h4 style="color:Tomato" align="center">To delete any student,at first you have to delete enrolls of that student </h4><br>


<form action="{{route('searchs')}}" method="post">
      {{csrf_field()}}
        <input type="text" name="name" placeholder="Student Name"><br>
        <input type="submit" value="search" ><br>

   </form> 


 <table class="table">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Registration date</th>
      
    </tr>
  </thead>
  <tbody> 
 @foreach($students as $s)
       <tr>
                        <th scope="row">{{$s->name}}</th>
                        <td>{{$s->id}}</td>
                        <td>{{$s->username}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->created_at}}</td>
                         <td> 
                         <button>
                            <a href ="{{route('sdelete',$s->id)}}" class="btn btn-danger" type="submit">Delete</a>     
                        </button>
                         </td>
                            
                             
                        
       </tr>
@endforeach 
   


    
  </tbody>
    </table>


@endsection('listt')