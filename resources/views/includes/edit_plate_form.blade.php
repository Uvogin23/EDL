<div class="jumbotron rounded-0 mb-0">
    <h1 class="text-center py-5">Edit Plate : {{$plate->name}}</h1>
    <div class="container border">
        <div class="row pt-5 pb-3">
            <div class="col-2"></div>
            <div class="col-8">
                
                {!! Form::model($plate,['method'=>'PATCH', 'action'=>['ManagerPlatesController@update',$plate->id],'files'=>true]) !!}

                <div class="form-group row{{ $errors->has('pstate_id') ? ' has-error' : '' }}">

                    {!! Form::label('pstate_id','State',['class'=>'col-2  col-form-label'])  !!}
                    <div class="col-10">
                        {!! Form::select('pstate_id',[''=>'choose'] + $pstates,null,['class'=>'form-control']) !!}

                        @if ($errors->has('pstate_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pstate_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('ptype_id') ? ' has-error' : '' }}">

                    {!! Form::label('ptype_id','Type',['class'=>'col-2  col-form-label'])  !!}
                    <div class="col-10">
                        {!! Form::select('ptype_id',[''=>'choose'] + $ptypes,null,['class'=>'form-control']) !!}
                        @if ($errors->has('ptype_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ptype_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('ingredients') ? ' has-error' : '' }}">

                    {!! Form::label('ingredients','Ingredients',['class'=>'col-2  col-form-label'])  !!}
                    <div class="col-10">
                        {!! Form::text('ingredients',null,['class'=>'form-control']) !!}
                        @if ($errors->has('ingredients'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ingredients') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('price') ? ' has-error' : '' }}">
            
                    {!! Form::label('price','Price',['class'=>'col-2  col-form-label'])  !!}
                    <div class="col-10">
                        {!! Form::number('price',null,['class'=>'form-control']) !!}
                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
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