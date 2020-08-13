<div class="jumbotron rounded-0 mb-0 border-bottom">
    <h1 class="text-center pt-5 pb-1" style="font-family: 'Source Sans Pro', sans-serif;">Order Your Food</h1>
    <p class="text-center pb-4"><strong>Check your order and specify the quantity in the box</strong></p>
    <div class="container border rounded">
        <div class="row py-5">
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-8">
                
                {!! Form::open(['method'=>'POST', 'action'=>'ClientController@store','files'=>false]) !!}

                    @if ($errors->has('menu'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menu') }}</strong>
                        </span>
                    @endif

                    @if ($errors->has('number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('number') }}</strong>
                        </span>
                    @endif


                    <div class="container">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="form-group row">
                                    <label class="col-12 col-md-4 col-form-label text-center"><strong>Phone Number :</strong></label>
                                    <div class="col-12 col-md-8">
                                    {!! Form::number('number',null,['class'=>'col form-control' , 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>

                    

                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Pizza</h3>

                        @foreach($pizzas as $pizza)
                            @if($pizza->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$pizza->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$pizza->name}}  <span class="d-none d-md-inline-block">...... {{$pizza->ingredients}} ...</span>...  {{$pizza->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$pizza->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>




                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Hamburger</h3>

                        @foreach($hamburgers as $hamburger)
                            @if($hamburger->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$hamburger->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$hamburger->name}}  <span class="d-none d-md-inline-block">......  {{$hamburger->ingredients}}  ...</span>...  {{$hamburger->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$hamburger->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>



                    
                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Tacos</h3>

                        @foreach($tacoss as $tacos)
                            @if($tacos->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$tacos->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$tacos->name}}  <span class="d-none d-md-inline-block">......  {{$tacos->ingredients}}  ...</span>...  {{$tacos->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$tacos->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>




                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Soufflet</h3>

                        @foreach($soufflets as $soufflet)
                            @if($soufflet->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$soufflet->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$soufflet->name}}  <span class="d-none d-md-inline-block">......  {{$soufflet->ingredients}}  ...</span>...  {{$soufflet->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$soufflet->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>








                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Crepes</h3>

                        @foreach($crepes as $crepe)
                            @if($crepe->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$crepe->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$crepe->name}}  <span class="d-none d-md-inline-block">......  {{$crepe->ingredients}}  ...</span>...  {{$crepe->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$crepe->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>



                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Plates</h3>

                        @foreach($plates as $plate)
                            @if($plate->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$plate->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$plate->name}}  <span class="d-none d-md-inline-block">......  {{$plate->ingredients}}  ...</span>...  {{$plate->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$plate->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>




                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Dessert</h3>

                        @foreach($desserts as $dessert)
                            @if($dessert->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$dessert->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$dessert->name}}  <span class="d-none d-md-inline-block">......  {{$dessert->ingredients}}  ...</span>...  {{$dessert->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$dessert->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>




                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2" style="font-family: 'Source Sans Pro', sans-serif;">Refreshments</h3>

                        @foreach($refreshments as $refreshment)
                            @if($refreshment->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$refreshment->id}}">
                                    </div>
                                    <div class="col-8 col-md-9 text-center">
                                        <label>
                                        {{$refreshment->name}}  <span class="d-none d-md-inline-block">......  {{$refreshment->ingredients}}  ...</span>... {{$refreshment->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 col-md-2 text-left pb-1">
                                        <input type="number" name="{{$refreshment->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>



                    <div class="form-group row">
                        <div class="col text-center">
                            {!! Form::submit('Order',['class'=>'btn btn-outline-primary mt-4 px-3']) !!}
                        </div>
                    </div>
                    
                {!! Form::close() !!}

            </div>
            <div class="col-0 col-md-2"></div>
        </div>
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





























