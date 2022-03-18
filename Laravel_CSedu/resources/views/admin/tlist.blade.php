@extends('layouts.loggedin')
@section('listt')

{{-- <span class="text-success">{{Session::get('msg')}}</span> --}}
{{-- <table border="1">
            
                <tr>
                        <th>Name</th>
                        <th>ID</th>
                        
                        <th>Username</th>
                        <th>Skill</th>
                        <th>Reg. Date</th>
                    </tr>
                    @foreach($t as $tt)
                        <tr>
                            <td>{{$tt->name}}</td>
                            <td>{{$tt->id}}</td>
                            
                            <td>{{$tt->username1}}</td>
                            <td>{{$tt->skill}}</td>
                             <td>{{$tt->created_at}}</td>
                             <td> <button>
                            <a href ="{{route('tdelete',$tt->id)}}" class="btn btn-success" type="submit">Delete</a>     
                        </button> </td>
                        </tr>
                    @endforeach  
    
</table>    --}}




<br>
<h3 style="color:Tomato" align="center">Teachers List </h3><br>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Teacher Name</th>
      <th scope="col"> ID</th>
      <th scope="col">Username</th>
      <th scope="col">Skill</th>
      <th scope="col">Registration date</th>
      
    </tr>
  </thead>
  <tbody> 
 @foreach($t as $tt)
       <tr>
                       <td>{{$tt->name}}</td>
                            <td>{{$tt->id}}</td>
                            
                            <td>{{$tt->username1}}</td>
                            <td>{{$tt->skill}}</td>
                             <td>{{$tt->created_at}}</td>
                             <td> 
                             <button>
                            <a href ="{{route('tdelete',$tt->id)}}" class="btn btn-danger" type="submit">Delete</a>     
                             </button>
                              </td>
                            
                             
                        
       </tr>
@endforeach 
   


    
  </tbody>
    </table>

@endsection('listt')