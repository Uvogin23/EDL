<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nedjma Restaurant | Login</title>
    
    <!-- Links -->
    <link rel="stylesheet" href="/css/cook.css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/128cfbc041.js"></script>

    <script src="/vendor/jquery/jquery.js"></script>
    <script>
        setInterval(
            function(){
                $('#content').load('<?php echo url('datafolder/data3');?>');
            },3000);
        
    </script>
</head>
<body>

    <nav id="mainavbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(#000407,#00041c);">
     <div class="container">
      <a class="navbar-brand" href="/"><i class="far fa-star-half text-white"></i>Nedjma</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/login">Login</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>






    <div class="jumbotron rounded-0 mb-0">
        <h1 class="text-center py-5">Login</h1>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="container border mb-5">
                        <div class="row pt-5 pb-3">
                            <div class="col-2"></div>
                            <div class="col-8">
                                
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <label for="email" class="col-4 col-form-label">E-Mail Address</label>
                                        <div class="col-8">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <label for="password" class="col-4 col-form-label">Password</label>
                                        <div class="col-8">
                                            <input id="password" type="password" class="form-control" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col text-center">
                                            <button type="submit" class="btn btn-outline-primary px-4 mt-3">
                                                Login
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col text-center">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password ?
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
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


