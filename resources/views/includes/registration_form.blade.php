<div class="jumbotron rounded-0 mb-0 border-bottom">
    <h1 class="text-center py-5">Register New User</h1>
    <div class="container border">
        <div class="row pt-5 pb-3">
            <div class="col-2"></div>
            <div class="col-8">
                
                {!! Form::open(['method'=>'POST', 'action'=>'ManagerController@store','files'=>true]) !!}

                <div class="form-group row{{ $errors->has('role_id') ? ' has-error' : '' }}">

                    {!! Form::label('role_id','Role',['class'=>'col-3 col-form-label'])  !!}
                    <div class="col-9">
                        {!! Form::select('role_id',[''=>'choose'] + $roles,null,['class'=>'form-control']) !!}
                        @if ($errors->has('role_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">

                    {!! Form::label('name','Name',['class'=>'col-3 col-form-label'])  !!}
                    <div class="col-9">
                        {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">

                    {!! Form::label('email','Email',['class'=>'col-3 col-form-label'])  !!}
                    <div class="col-9">
                        {!! Form::email('email',null,['class'=>'form-control','required']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('number') ? ' has-error' : '' }}">
                    
                    {!! Form::label('number','Number',['class'=>'col-3 col-form-label','required'])  !!}
                    <div class="col-9">
                        {!! Form::number('number',null,['class'=>'form-control','required']) !!}
                        @if ($errors->has('number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                    
                    {!! Form::label('password','password',['class'=>'col-3 col-form-label','required'])  !!}
                    <div class="col-9">
                         {!! Form::password('password',['class'=>'form-control']) !!}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-3 col-form-label">Confirm Password</label>
                    <div class="col-9">             
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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























           

        

       
        


    
    
    

        
        
    
        
    
        
    
    