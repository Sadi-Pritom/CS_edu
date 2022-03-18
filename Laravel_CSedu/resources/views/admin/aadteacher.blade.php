@extends('layouts.loggedin')
@section('gett')
<html>
<head>
   <title>Registration Form</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>


<body>

        <div class="container">
           <div class="row">
              <div class="col-md-4 offset-md-4">
                  <div class="signup-form">
                      <form Action="{{route('tregister')}}" method="post" class="mt-5 p-4 border bg-light shadow">
                      {{@csrf_field()}}
                      {{-- <h3 class="mb-5 text-secondary">Register As Student</h3> --}}
                       <h3 style="color:Tomato">Add A Teacher</h3><br>

                        <div class="mb-3">
                            <label>Name<span class="text-danger">*</span></lebel>
                            <input type="text" name="name" value="{{old('name')}}"placeholder="Name" class="form-control">
                            @error('name')
                             <span class="text-danger">{{$message}}</span><br>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label>Username<span class="text-danger">*</span></lebel>
                            <input type="text"name="username" value="{{old('username')}}" placeholder="Username"  class="form-control">
                            @error('username')
                            <span class="text-danger">{{$message}}</span><br>
                            @enderror
                        </div> 
                         <div class="mb-3">
                            <label>Skill<span class="text-danger">*</span></lebel>
                            <input type="text" name="skill" value="{{old('skill')}}" placeholder="Skill"  class="form-control">
                            @error('skill')
                              <span class="text-danger">{{$message}}</span><br>
                            @enderror
                        </div>  
                        <div class="mb-3">
                            <label>Password<span class="text-danger">*</span></lebel>
                            <input ype="password" name="password" value="{{old('password')}}" placeholder="Password"class="form-control">
                           @error('password')
                           <span class="text-danger">{{$message}}</span><br>
                          @enderror
                        </div>
                         <div class="mb-3">
                            <label>Confirm Password<span class="text-danger">*</span></lebel>
                            <input  type="password" name="conf_password" value="{{old('conf_password')}}" placeholder="Confirm Password"class="form-control">
                           @error('conf_password')
                           <span class="text-danger">{{$message}}</span><br>
           
                            @enderror
                        </div>
                        <div class=" col-md-12">
                            
                            <button class="btn btn-primary float end">Registration</button>
                        </div>    
                        </form>
                    </div>
                </div>
            </div>
         </div>   







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>

@endsection('gett')