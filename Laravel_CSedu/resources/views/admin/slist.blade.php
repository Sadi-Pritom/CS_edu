@extends('layouts.loggedin')
@section('listt')
<h1>list</h1>
<span class="text-success">{{Session::get('msg')}}</span>
<table border="1">
            
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
                             {{-- <td><a class="btn btn-primary" href="{{route('students.edit',['id'=>encrypt($s->id)])}}">Edit</a></td> --}}
                             <td> <button>
                            <a href ="{{route('sdelete',$s->id)}}" class="btn btn-success" type="submit">Delete</a>     
                        </button> </td>
                        </tr>
                    @endforeach  
    
</table>    
@endsection('listt')