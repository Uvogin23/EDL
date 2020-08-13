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
          <li class="nav-item active">
            <a class="nav-link" href="/Manager/TS">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Manager/Plates">Plates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Manager/Users">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>






    <div class="jumbotron rounded-0 mb-0 border-bottom">
        <h1 class="text-center py-5">Create Plates Type</h1>
        <div class="container border">
            <div class="row pt-5 pb-3">
                <div class="col-2"></div>
                <div class="col-8">
                    
                    {!! Form::open(['method'=>'POST', 'action'=>'StateTypeController@store','files'=>true]) !!}

                    <input type="hidden" name="action" value="storetype">
                    
                    <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">

                        {!! Form::label('name','Name',['class'=>'col-2 col-form-label'])  !!}
                        <div class="col-10">            
                            {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col text-center">
                            {!! Form::submit('Submit',['class'=>'btn btn-outline-success']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}

                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>

    



    <div class="jumbotron rounded-0 mb-0 pt-0">
        <h1 class="text-center py-5">Plates Types List</h1>
        <div class="container">
            @if($ptypes)
            <table class="table table-bordered text-center py-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ptypes as $type)
                    <tr>
                        <td>{{$type->id}}</td>
                        <td>{{$type->name}}</td>
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

