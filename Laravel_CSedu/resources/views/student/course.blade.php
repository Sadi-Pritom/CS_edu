@extends('layouts.loggedin')
@section('listt')

<h1>Courses</h1>
<span class="text-success">{{Session::get('msg')}}</span>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Teacher</th>
      <th scope="col">Price</th>
      <th>Enroll</th>
    </tr>
  </thead>
  <tbody>
  
@foreach($courses as $c)
<tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->name}}</td>
      <td>{{$c->teacher}}</td>
      <td>{{$c->price}}</td>
      <td>
      
                  {{-- @foreach($st->enroll as $se)
                    
                      
                                                    @if($c->id == $se->course->id)  
                                                            <a  class="btn btn-success" type="submit">Enrolled</a> 
                                                            
                                                            @break    
       
                                                  @else
                                                           <a href ="{{route('enroll',$c->id)}}" class="btn btn-danger" type="submit">Enroll</a>     
                                                  
                                                       
                                                  @endif
                                            
                   @endforeach --}}
                  @php
                   $a=0;
                  @endphp

                   @foreach($st->enroll as $se)
                    
                      
                                                    @if($c->id == $se->course->id)  
                                                            
                                                            @php
                                                            $a=1;
                                                            @endphp
                                                            @break    
       
                                                  @else
                                                           @php
                                                            $a=0;
                                                            @endphp
                                                       
                                                  @endif
                                            
                   @endforeach
                @if ($a==1)

                <a  class="btn btn-success" type="submit">Enrolled</a> 

                @else
                <a href ="{{route('enroll',$c->id)}}" class="btn btn-danger" type="submit">Enroll</a>
                    
                @endif



                    

                   

                  
                   
       {{-- <button>
        <a href ="{{route('enroll',$c->id)}}" class="btn btn-success" type="submit">Enroll</a>     
      </button>  --}}

      </td>
    
    </tr>
    
@endforeach
    
  </tbody>
</table>





@endsection('listt')