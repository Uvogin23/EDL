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




    @include('includes.edit_user_form')




    <!-- importation -->
    <script src="/vendor/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/vendor/bootstrap/js/bootstrap.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>



