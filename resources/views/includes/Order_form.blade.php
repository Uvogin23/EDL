<div class="jumbotron rounded-0 mb-0 border-bottom">
    <h1 class="text-center pt-5 pb-1">Order For Clients</h1>
    <p class="text-center pb-4">Check the order and specify the quantity in the box</p>
    <div class="container border rounded">
        <div class="row py-5">
            <div class="col-2"></div>
            <div class="col-8">

                {!! Form::open(['method'=>'POST', 'action'=>'WaiterController@store','files'=>false]) !!}

                    @if ($errors->has('menu'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menu') }}</strong>
                        </span>
                    @endif



                    <div class="container">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Table Number :</label>
                                    <div class="col-8">
                                    {!! Form::number('number',null,['class'=>'col form-control' , 'required' ,'min="1"' ,'max="15"']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>



                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Pizza</h3>

                        @foreach($pizzas as $pizza)
                            @if($pizza->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$pizza->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$pizza->name}}  ......  {{$pizza->ingredients}}  ......  {{$pizza->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
                                        <input type="number" name="{{$pizza->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>





                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Hamburger</h3>

                        @foreach($hamburgers as $hamburger)
                            @if($hamburger->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$hamburger->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$hamburger->name}}  ......  {{$hamburger->ingredients}}  ......  {{$hamburger->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
                                        <input type="number" name="{{$hamburger->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>                    




                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Tacos</h3>

                        @foreach($tacoss as $tacos)
                            @if($tacos->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$tacos->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$tacos->name}}  ......  {{$tacos->ingredients}}  ......  {{$tacos->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
                                        <input type="number" name="{{$tacos->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>





                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Soufflet</h3>

                        @foreach($soufflets as $soufflet)
                            @if($soufflet->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$soufflet->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$soufflet->name}}  ......  {{$soufflet->ingredients}}  ......  {{$soufflet->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
                                        <input type="number" name="{{$soufflet->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>





                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Crepes</h3>

                        @foreach($crepes as $crepe)
                            @if($crepe->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$crepe->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$crepe->name}}  ......  {{$crepe->ingredients}}  ......  {{$crepe->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
                                        <input type="number" name="{{$crepe->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>





                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Plates</h3>

                        @foreach($plates as $plate)
                            @if($plate->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$plate->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$plate->name}}  ......  {{$plate->ingredients}}  ......  {{$plate->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
                                        <input type="number" name="{{$plate->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>




                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Dessert</h3>

                        @foreach($desserts as $dessert)
                            @if($dessert->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$dessert->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$dessert->name}}  ......  {{$dessert->ingredients}}  ......  {{$dessert->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
                                        <input type="number" name="{{$dessert->id}}" min="1" max="8">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>




                    <div class="container border rounded my-4 py-4 px-5">
                        <h3 class="text-center mb-4 mt-2">Refreshments</h3>

                        @foreach($refreshments as $refreshment)
                            @if($refreshment->pstate_id == 1)
                                <div class="form-group row">
                                    <div class="col-1 text-right">
                                        <input class="checkBoxes" type="checkbox" name="menu[]" value="{{$refreshment->id}}">
                                    </div>
                                    <div class="col-9 text-center">
                                        <label style="font-weight: 300;">
                                        {{$refreshment->name}}  ......  {{$refreshment->ingredients}}  ...... {{$refreshment->price}} DA
                                        </label>
                                    </div>
                                    <div class="col-2 text-right pb-1">
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
