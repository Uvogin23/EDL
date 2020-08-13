<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nedjma Restaurant | Home</title>

        <!-- Links -->
        <link rel="stylesheet" href="/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Parisienne|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/128cfbc041.js"></script>


    </head>
    <body>


        <!----------------- HEADER ------------------>
        <header>
           
            <nav id="mainavbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
             <div class="container">
              <a class="navbar-brand" href="/"><i class="far fa-star-half text-white"></i>Nedjma</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Client">Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Client/tracker">Tracker</a>
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
            
            
            <div id="showcase" class="d-flex">
                <div id="header" class="container text-white">
                   
                    <div class="row">
                        <div class="col text-center">
                            <p id="sub-one" class="mb-2">Enjoy the <span class="d-none d-lg-inline-block">taste of</span> food</p>
                            <h1>Nedjma Restaurant</h1> 
                            <p class="mb-2 d-block d-lg-none">Because love connect us</p>
                            <p class="mb-2 d-none d-lg-block">Because love connect us</p>
                            <a href="/Client" class="btn btn-outline-warning mt-2 px-3">Order Now</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
        </header>
        <!----------------END HEADER----------------->
        






        <!--------------------MAIN-------------------->
        <main id="main">


          <div class="container-fluid p-4 p-lg-5 my-4 text-center">
            <div class="row">
              <div class="col-2"></div>
              <div class="col-8">
                <h1>Our Story</h1>
                <p class="py-2">A very unique and casual restaurant which calls an old gasoline filling station its home, named appropriately “Nedjma”.  All seating is outdoors, but covered via umbrellas and tents.  Your guests can enjoy a hot cofee as they smell their tasty food being prepared on the grill near by. <br>
                </p>
                <a href="#big-footer" class="btn btn-outline-warning">Read more</a>
              </div>
              <div class="col-2"></div>
            </div>
          </div>


          <div class="jumbotron rounded-0 mb-0 p-lg-5 p-5">
            <div class="row">
              <div class="col-2"></div>
              <div class="col-8">
                <h1 class="text-center">Our Special Menu</h1>
                <div class="row mt-5">

                  <div class="col-12 col-lg-3 text-center">
                    <img class="rounded-circle img-thumbnail" src="../images/pizza.png" alt="Pizza">
                    <p class="mt-2">Pizza</p>
                  </div>

                  <div class="col-12 col-lg-3 text-center">
                    <img class="rounded-circle img-thumbnail" src="../images/Burger.png" alt="Sandwich">
                    <p class="mt-2">Sandwiches</p>
                  </div>

                  <div class="col-12 col-lg-3 text-center">
                    <img class="rounded-circle img-thumbnail" src="../images/crepe.png" alt="Crep">
                    <p class="mt-2">Crepes</p>
                  </div>

                  <div class="col-12 col-lg-3 text-center">
                    <img class="rounded-circle img-thumbnail" src="../images/plates.png" alt="Plates">
                    <p class="mt-2">Plates</p>
                  </div>

                </div>
                <div class="row text-center mt-3 px-4">
                  <p class="d-none d-lg-block">We offer you a unique menu with multiple choices. Sandwiches, pizza, plates and more of our delicious food. We have also plates for vegetarians, diabetics, and healthy food for those who like to eat clean. Our menu contains also pancakes with fruit and nutella, natural juice and traditional plates. We prepare also birthday cakes for our clients parties if they want to.</p>
                </div>
                <div class="row justify-content-center mt-2">
                  <a href="/Client" class="btn btn-outline-warning text-center">See More</a>
                </div>
              </div>
              <div class="col-2"></div>
            </div>
          </div>



          <div class="container-fluid p-5 mt-3 text-center">
            <h1>Testimonials</h1>
            <div class="row mt-lg-4 mt-3 justify-content-center align-items-center">
              <div class="col-md-3  mr-md-4 rounded p-4">
                <i class="fas fa-quote-left text-info mb-3"></i>
                <blockquote class="blockquote">
                  <p class="px-4 px-md-0">Thank you for dinner last night. It was amazing!! I have to say it’s the best meal I have had in quite some time.</p>
                  <footer class="blockquote-footer">
                    Mustafa Samir
                  </footer>
                </blockquote>
              </div>
              <div class="col-md-3  rounded p-4">
                <i class="fas fa-quote-left text-info mb-3"></i>
                <blockquote class="blockquote">
                  <p class="px-4 px-md-0">I just wanted to let you know that I had one of the best dinners of my life last night ... at your restaurant !</p>
                  <footer class="blockquote-footer">
                    Ali Mahmoud
                  </footer>
                </blockquote>
              </div>
              <div class="col-md-3  ml-md-4 rounded p-4">
                <i class="fas fa-quote-left text-info mb-3"></i>
                <blockquote class="blockquote">
                  <p class="px-4 px-md-0">My birthday party was better and even more “delicious” than I had hoped. It was a memorable occasion for all of us.</p>
                  <footer class="blockquote-footer">
                    Wail Mhani
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
           
           
        <!------------------END MAIN------------------>


        





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
                        <footer class="blockquote-footer mt-2">Nedjma Restaurant</footer>
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
               
                <form method="get" action="/Client/Contact">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name@example.com" name="email">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message !" name="text"></textarea>
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
            <form method="get" action="/Client/Contact">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name@example.com" name="email">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message !" name="text"></textarea>
                  </div>
                  <button id="submit" type="submit" class="btn btn-outline-warning btn-sm px-3">Submit</button>
                </form>
          </div>
        </div>
      </div>
    </div>





    <!-- importation -->
    <script src="/vendor/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/vendor/bootstrap/js/bootstrap.js"></script>

    <!-- nav script -->
    <script>
        $(function() {
          $(document).scroll(function(){
              var $nav = $("#mainavbar");
              $nav.toggleClass("scrolled",$(this).scrollTop() > $nav.height());
          })
          })
    </script>



    </body>
</html>
