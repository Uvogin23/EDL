<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nedjma Restaurant | Manager</title>
    
    <link rel="stylesheet" href="/css/cook.css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/128cfbc041.js"></script>

</head>
<body>
       


    <nav id="mainavbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(#000407,#00041c);">
     <div class="container">
      <a class="navbar-brand" href="/Manager/Commandes"><i class="far fa-star-half text-white"></i>Nedjma</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/Manager/Commandes">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Manager/TS">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Manager/Plates">Plates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/Manager/Users">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>



    @include('includes.registration_form')



    <div class="jumbotron rounded-0 mb-0 pt-0">
        <h1 class="text-center py-5">Users List</h1>
        <div class="container">
            @if($users)
            <table class="table table-bordered text-center py-5">
                <thead>
                <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Role</th>
                 <th>Phone Number</th>
                 <th>Email</th>
                 <th>Join Date</th>
                 <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name }}</td>
                        <td>{{$user->role ? $user->role->name :'no role' }}</td>
                        <td>0{{$user->number }}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans() }}</td>
                        <td>
                                {!! Form::model($user,['method'=>'DELETE','action'=>['ManagerController@destroy',$user->id]])  !!}
                                
                                {!! Form::submit('Delete',['class'=>'btn btn-outline-danger']) !!}
                                {!! Form::close() !!}
                        </td>
                        <td><a class="btn btn-outline-primary" href="/Manager/Users/{{$user->id}}/edit">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
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














     
     
