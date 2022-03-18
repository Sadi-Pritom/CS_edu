<html>

  <br><br>
    <h2 align="center" style="color:Tomato">Welcome to CS Edu- An online education platform</h2> <br>
    {{-- <a href="{{route('logas')}}">login</a>
    
    <a href="/register">Registration</a>   --}}

 
 

</html> 


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
                      <h3 class="mb-5 text-secondary"> </h3>
                      <div class="row">
                        <div class="mb-3 col-md-6">
                               <a href ="{{route('logas')}}" class="btn btn-success" type="submit">Log As</a>

                        </div>   
                        <div class="mb-3 col-md-6">
                              <a  href="/register" class="btn btn-success" type="submit">Registration</a>

                        </div>
                        </div>
                           
                        </form>
                    </div>
                </div>
            </div>
         </div>   







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
   