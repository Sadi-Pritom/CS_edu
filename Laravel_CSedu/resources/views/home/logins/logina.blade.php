
@php
$name="Sadi";
@endphp
{{-- <html>

    <form action="{{route('logina')}}" method="post">
    {{@csrf_field()}}
        <input type="text" value="<?php echo $name;?>" name="uname" placeholder="Username"><br>
        <input type="password" name="pass"placeholder="Password"><br>
       <input type="submit" value="Login"> 
      <!-- <a href="/home">Login</a>  -->
     
</html>  --}}

<html>
<head>
   <title>login form</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>


<body>

        <div class="container">
           <div class="row">
              <div class="col-md-4 offset-md-4">
                  <div class="signup-form">
                      <form Action="{{route('logina')}}" method="post" class="mt-5 border p-4 bg-light shadow">
                      {{@csrf_field()}}
                      <h3 class="mb-5 text-secondary">Log In As Admin</h3>
                        <div class="mb-3">
                            <label>Username<span class="text-danger">*</span></lebel>
                            <input type="text"name="username2" placeholder="Username" class="form-control">
                             @error('username2')
                               <span class="text-danger">{{$message}}</span><br>
                             @enderror
                        </div>   
                        <div class="mb-3">
                            <label>Password<span class="text-danger">*</span></lebel>
                            <input type="password" name="password"placeholder="Password" class="form-control">
                            @error('password')
                            <span class="text-danger">{{$message}}</span><br>
                            @enderror
                        </div>
                        <div class=" col-md-12">
                            
                            <button class="btn btn-primary float end">Login</button>
                        </div>    
                        </form>
                    </div>
                </div>
            </div>
         </div>   







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>