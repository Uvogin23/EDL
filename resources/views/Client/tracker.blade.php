<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Nedjma | Tracker</title>
    
    <!-- Links -->
    <link rel="stylesheet" href="/css/order.css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/128cfbc041.js"></script>
    
    <script src="/vendor/jquery/jquery.js"></script>
    
</head>
<body>
    
    <!----------------- HEADER ------------------>
    <header>
       
        <nav id="mainavbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(#000407,#00041c);">
           <div class="container">
            <a class="navbar-brand" href="/"><i class="far fa-star-half text-white"></i>Nedjma</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Client">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/Client/tracker">Tracker</a>
              </li>
              <li class="nav-item d-none d-lg-inline-block">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Contact</a>
              </li>
              <li class="nav-item d-lg-none">
                <a class="nav-link" href="#small-footer">Contact</a>
              </li>
            </ul>
            </div>
           </div>
          </nav>
        
    </header>
    <!----------------END HEADER----------------->






	   @include('includes.check')
    	



     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <h4 class="text-center" style="color: #4a4b46; font-weight: 400;">Contact</h4>
            <hr class="text-dark mt-1">
            <form>
              <div class="form-group">
                <input type="email" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Name@example.com">
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message !"></textarea>
              </div>
              <button id="submit" type="submit" class="btn btn-outline-secondary btn-sm px-3 ">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>


      


    <!-- importation -->
    <script src="/vendor/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/vendor/bootstrap/js/bootstrap.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>