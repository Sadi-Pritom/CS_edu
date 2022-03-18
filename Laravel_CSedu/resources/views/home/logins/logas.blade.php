{{-- <html>


    <h2>Log As</h2> <br>
    <a href="{{route('login')}}">Student</a> <br>
     <a href="{{route('logint')}}">Teacher</a> <br>
     <a href="{{route('logina')}}">Admin</a> 
    
    
 

</html>  --}}



<html>
<head>
   <title></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>


<body>

        <div class="container">
           <div class="row">
              <div class="col-md-4 offset-md-4">
                  <div class="signup-form">
                      <form Action="" method="" class="mt-5 border p-4 bg-light shadow">
                      {{-- {{@csrf_field()}} --}}
                      {{-- <h3 class="mb-5 text-secondary"style="color:Tomato">Log As </h3> --}}
                      <h3 style="color:Tomato">Log As </h3><br>

                      
                        <div class="mb-3 col-md-6">
                               <a href ="{{route('login')}}" class="btn btn-success" type="submit">Log As Student</a>

                        </div>   
                        <div class="mb-3 col-md-6">
                              <a  href="{{route('logint')}}" class="btn btn-success" type="submit">Log As Teacher</a>

                        </div>
                        <div class="mb-3 col-md-6">
                              <a  href="{{route('logina')}}" class="btn btn-success" type="submit">Log As Admin</a>

                        </div>
                       
                           
                        </form>
                    </div>
                </div>
            </div>
         </div>   







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
   

