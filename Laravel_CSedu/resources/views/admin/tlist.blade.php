@extends('layouts.loggedin')
@section('listt')
<h1>list</h1>
<span class="text-success">{{Session::get('msg')}}</span>
<table border="1">
            
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
    
</table>    
@endsection('listt')