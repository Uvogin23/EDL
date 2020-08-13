<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nedjma Restaurant | Cook</title>
    
    <!-- Links -->
    <link rel="stylesheet" href="/css/cook.css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/128cfbc041.js"></script>

</head>

<body>
           
    <nav id="mainavbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(#000407,#00041c);">
     <div class="container">
      <a class="navbar-brand" href="/Cook"><i class="far fa-star-half text-white"></i>Nedjma</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/Cook">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/Cook/Plates">Plates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    <div class="jumbotron rounded-0 mb-0">
        <div id="content"> 
            <div class="container">
                <h1 class="text-center py-5">Manage Plates</h1>
                @if($plates)
                <table class="table table-bordered text-center py-5">
                    <thead>
                        <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Ingredients</th>
                     <th>Price</th>
                     <th>Type</th>
                     <th>State</th>
                     <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($plates as $plate)
                        <tr>
                        <td>{{$plate->id}}</td>
                        <td>{{$plate->name }}</td>
                        <td>{{$plate->ingredients}}</td>
                        <td>{{$plate->price}}</td>
                        <td>{{$plate->ptype ? $plate->ptype->name :'no type' }}</td>
                        <td>{{$plate->pstate ? $plate->pstate->name :'no state' }}</td>
                        @if($plate->pstate_id !='3' and $plate->pstate_id !='2')
                        <td>{!! Form::model($plate,['method'=>'PATCH','action'=>['CookController@update',$plate->id]])  !!}
                            <input type="hidden" name="update" value="plate">
                            <input type="hidden" name="pstate_id" value="3">
                                
                                {!! Form::submit('Provision',['class'=>'btn btn-outline-secondary']) !!}
                                {!! Form::close() !!}</td>
                                @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
              
        </div>
    </div>






    <!----------------BIG FOOTER----------------->

    <footer id="big-footer" class="d-none d-lg-block">
        
        <div id="copyright" class="container-fluid text-center text-white">
           
            <div id="separation" class="container">
                <div class="row align-items-center">
                    <div class="col text-left">
                        <p class="m-0">Copyright © 2019, All rights reserved</p>
                    </div>
                    
                    <div class="col px-0">
                        <ul class="nav justify-content-end">
                          <li class="nav-item">
                            <a class="nav-link" href="instagram"><i class="fab fa-instagram"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="facebook"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="twitter"><i class="fab fa-twitter"></i></a>
                          </li>
                          
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>

    </footer>
    <!--------------END BIG FOOTER-------------->

    <!----------------Small FOOTER----------------->

    <footer id="small-footer" class="d-block d-lg-none">
        
        <div id="copyright" class="container-fluid text-center text-white">
                <div class="row align-items-center">
                    <div class="col">
                        <p class="my-3">Copyright © 2019, All rights reserved</p>
                    </div>
                </div>
        </div>

    </footer>
    <!--------------END Small FOOTER-------------->
    






    <!-- importation -->
    <script src="/vendor/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/vendor/bootstrap/js/bootstrap.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>





