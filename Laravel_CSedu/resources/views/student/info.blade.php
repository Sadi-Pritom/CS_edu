@extends('layouts.loggedin')
@section('listt')
{{-- <span class="text-success">{{Session::get('msg')}}</span> --}}

<h3 style="color:Green" align="center">Info</h3>
<h3 style="color:Tomato" align="center">Contact:01724629448</h3>

<h3 style="color:Tomato" align="center">bKash:01724629448</h3>
<h3 style="color:Tomato" align="center">Rocet:01274629446</h3>
<h3 style="color:Tomato" align="center">Nagad:08645832489</h3>




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
                            <td><a href="{{route('student.details',['id'=>$s->id+839,'name'=>$s->name])}}">{{$s->name}}</a></td>
                            <td>{{$s->id}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->username}}</td>
                             <td>{{$s->created_at}}</td>
                             <td><a class="btn btn-primary" href="{{route('students.edit',['id'=>encrypt($s->id)])}}">Edit</a></td>
                        </tr>
                    @endforeach  
    
</table>     --}}
<table align="center">
<html>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0720851949663!2d90.42265291498259!3d23.816035584557046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7e956868aef%3A0xbbd7208016c6db1d!2sSadi%20Pritom!5e0!3m2!1sen!2sbd!4v1647799644739!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</html>
</table>


@endsection('listt')