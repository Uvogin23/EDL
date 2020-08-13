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
    <!----------------END HEADER----------------->








    <div class="jumbotron rounded-0 mb-0">
        <div>
            @if(Session::has('OrderDeleted'))
            <p>{{session('OrderDeleted')}}</p>
            @endif

            @if(Session::has('Order_passed_message'))
            <p>{{session('Order_passed_message')}}</p>
            @endif
        </div>
        @if($Commande)
            @if(count($Commande)==0)
            <h1 class="text-center py-5" style="font-family: 'Source Sans Pro', sans-serif;">You Have No Orders</h1>
            @else
            <h1 class="text-center py-5" style="font-family: 'Source Sans Pro', sans-serif;">Your Orders Tracker</h1>
            <div class="container">
            <table class="table table-bordered text-center py-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Orders</th>
                        <th>State</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Commande as $com)
                        @if($com->cstate->name !='payed')
                        <tr>
                            <td>{{$com->id}}</td>
                            <td>@foreach($com->order as $ord)
                                <p>{{$ord->number}} {{$ord->plate->name}} ingredients: {{$ord->plate->ingredients}}</p>
                                @endforeach
                            </td>
                            <td>{{$com->cstate->name}}</td>
                            <td>{{$com->created_at->diffForHumans()}}</td>
                            @if($com->cstate->name =='new')
                            <td>
                                {!! Form::model($com,['method'=>'DELETE','action'=>['ClientController@destroy',$com->id]])  !!}
                                    <input type="hidden" name="number" value="{{$com->number}}">
                                    {!! Form::submit('Delete',['class'=>'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                            </td>
                            @endif
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            @endif
        @endif
        </div>
    </div>











    <!----------------BIG FOOTER----------------->

    <footer id="big-footer" class="d-none d-lg-block">
      
       
        <div class="container text-white"> 
            <div class="row p-5">
                <div class="col text-center">
                        <h5 class="mb-2 happiness">“ Le goût authentique ”</h5>
                        <p class="m-0">
                           Dear guests, you are welcomed at our restaurant to dine with us. We greatly appreciate your choice and we promise to serve you with love, gratitude and our excellence. Have a pleasant dining experience and a nice time.
                        </p>
                       
                        <p class="mt-2 mb-1 info"><strong>Adress : </strong>Lots Elmordjane N31 Sidi Mebrouk, Constantine, Algeria.</p>
                        <p class="mb-1 info"><strong>Work hours : </strong>From Saturday to Thursday, 8 am to 12 pm. </p>
                        <p class="mb-0 info"><strong>Tel : </strong>066887966</p>
                        <footer class="blockquote-footer mt-2">Restaurant Nedjma</footer>
                    </div>
            </div>
        </div>
        
        
        
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





    <!----------------SMALL FOOTER---------------->
    <footer id="small-footer" class="d-block d-lg-none">
        
        
        <div class="accordion border-0" id="accordionExample">
          <div class="card text-white text-center bg-dark rounded-0 ">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button id="btn1" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  About us
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse border-0" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body border-top border-bottom px-5">
                 <h5 class="mb-2 happiness">“ Le goût authentique ”</h5>
                 <p class="my-0">
                   Dear guests, you are welcomed at our restaurant to dine with us. We greatly appreciate your choice and we promise to serve you with love, gratitude and our excellence. Have a pleasant dining experience and a nice time.
                 </p>
                 <p class="mt-2 mb-1 info"><strong>Adress : </strong>Lots Elmordjane N31 Sidi Mebrouk, Constantine</p>
                 <p class="mb-1 info"><strong>Work hours : </strong>From Saturday to Thursday, 8 am to 12 pm. </p>
                 <p class="mb-0 info"><strong>Tel : </strong>066887966</p>
                 <footer class="blockquote-footer mt-2">Nedjma Restaurant</footer>
              </div>
            </div>
          </div>
          
          <div class="card text-white text-center bg-dark  rounded-0">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button id="btn2" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Contact
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse border-0" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
               
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name@example.com">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message !"></textarea>
                  </div>
                  <button id="submit" type="submit" class="btn btn-outline-warning btn-sm px-3">Submit</button>
                </form>
                
              </div>
            </div>
          </div>
        </div>
        

        
        <div id="copyright" class="text-center text-white">
            <p class="py-2 m-0">Copyright © 2019, All rights reserved</p>
        </div>
        
        
    </footer>
    <!--------------END SMALL FOOTER-------------->





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





