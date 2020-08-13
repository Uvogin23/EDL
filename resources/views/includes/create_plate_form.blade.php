<div class="jumbotron rounded-0 mb-0 border-bottom">
    <h1 class="text-center py-5">Create New Plate</h1>
    <div class="container border">
        <div class="row pt-5 pb-3">
            <div class="col-2"></div>
            <div class="col-8">
                
                {!! Form::open(['method'=>'POST', 'action'=>'ManagerPlatesController@store','files'=>true]) !!}

                <div class="form-group row{{ $errors->has('pstate_id') ? ' has-error' : '' }}">
                    {!! Form::label('pstate_id','State',['class'=>'col-2  col-form-label'])  !!}

                    <div class="col-10">
                        {!! Form::select('pstate_id',[''=>'choose'] + $pstates,null,['class'=>'form-control','required']) !!}
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
                        {!! Form::select('ptype_id',[''=>'choose'] + $ptypes,null,['class'=>'form-control','required']) !!}
                        @if ($errors->has('ptype_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ptype_id') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>

                <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name','Name',['class'=>'col-2  col-form-label'])  !!}
                    <div class="col-10">
                        
                        {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('ingredients') ? ' has-error' : '' }}">
                    {!! Form::label('ingredients','Ingredients',['class'=>'col-2  col-form-label'])  !!}

                    <div class="col-10"> 
                        {!! Form::text('ingredients',null,['class'=>'form-control','required']) !!}
                        @if ($errors->has('ingredients'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ingredients') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>

                <div class="form-group row{{ $errors->has('price') ? ' has-error' : '' }}">
                    {!! Form::label('price','Price',['class'=>'col-2  col-form-label','required'])  !!}

                    <div class="col-md-10">
                        {!! Form::number('price',null,['class'=>'form-control','required']) !!}
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















    