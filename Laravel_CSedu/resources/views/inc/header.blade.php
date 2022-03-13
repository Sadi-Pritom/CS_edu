 

 <div id="header">
               {{-- <a href="/studentList">List</a> --}}
               {{-- <a href="{{route('student/create')}}">Create</a>
               <a href="/studentGet">Get</a> --}}
               

               {{-- student --}}

               @if(Session::has('username'))<a href="{{route('profile')}}">Profile</a>@endif
               {{-- @if(!Session::has('username'))<a href="{{route('login')}}">login as Student</a>@endif --}}
                @if(Session::has('username'))<a href="{{route('review')}}">Reviews</a>@endif
                @if(Session::has('username'))<a href="{{route('courses')}}">courses</a>@endif
               @if(Session::has('username'))<a href="{{route('logout')}}">logout</a>@endif
              
              {{-- teacher --}}
               @if(Session::has('username1'))<a href="{{route('profilet')}}">Profile</a>@endif
               {{-- @if(!Session::has('username1'))<a href="{{route('login')}}">login as Teacher</a>@endif --}}
                @if(Session::has('username1'))<a href="{{route('logout')}}">logout</a>@endif
                @if(Session::has('username1'))<a href="{{route('courses')}}">courses</a>@endif
                @if(Session::has('username1'))<a href="{{route('addCourse')}}">Add course</a>@endif
               
               {{-- admin --}}
               {{-- @if(!Session::has('username2'))<a href="{{route('login')}}">login as Admin</a>@endif --}}
               
                 @if(Session::has('username2'))<a href="{{route('aprofile')}}">Profile</a>@endif

                @if(Session::has('username2'))<a href="{{route('slist')}}">Student List</a>@endif
                @if(Session::has('username2'))<a href="{{route('tlist')}}">Teacher List</a>@endif
                @if(Session::has('username2'))<a href="{{route('clist')}}">Course List</a>@endif
                @if(Session::has('username2'))<a href="{{route('elist')}}">Enroll List</a>@endif

                @if(Session::has('username2'))<a href="{{route('logout')}}">logout</a>@endif


                

</div>
