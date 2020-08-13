@if($new)
<div class="jumbotron rounded-0 mb-0 border-bottom">
    <h1 class="text-center py-5 head">New Orders</h1>
    <div class="container">
        <table class="table table-bordered py-5 text-center">
            <thead>
            <tr>
             <th>ID</th>
             <th>Table</th>
             <th>Orders</th>
             <th>Date</th>
             <th>Price</th>
             <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($new as $commande)
                @if($commande->ctype->name=='table')
                <tr>
                <td>{{$commande->id}}</td>
                <td>{{$commande->number}}</td>
                <td>@foreach($commande->order as $ord)
                    <p>{{$ord->number}} {{$ord->plate->name}} </p>
                    
                    @endforeach
                </td>
                <td>{{$commande->created_at->diffForHumans()}}</td>
                <td>{{$commande->price}}</td>
                <td>
                	{!! Form::model($commande,['method'=>'DELETE','action'=>['WaiterController@destroy',$commande->id]])  !!}
                        
                        {!! Form::submit('Delete',['class'=>'btn btn-outline-danger']) !!}
                        {!! Form::close() !!}
                        </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif



@if($ready)
<div class="jumbotron rounded-0 mb-0 pt-0">
    <h1 class="text-center py-5 head">Ready To Serve</h1>
    <div class="container">
        <table class="table table-bordered py-5 text-center">
            <thead>
            <tr>
             <th>ID</th>
             <th>Table</th>
             <th>Orders</th>
             <th>Date</th>
             <th>Price</th>
             <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($ready as $commande)
                <tr>
                <td>{{$commande->id}}</td>
                <td>{{$commande->number}}</td>
                <td>@foreach($commande->order as $ord)
                    <p>{{$ord->number}} {{$ord->plate->name}} </p>
                    @endforeach
                </td>
                <td>{{$commande->created_at->diffForHumans()}}</td>
                <td>{{$commande->price}}</td>
                <td>
                	{!! Form::model($commande,['method'=>'PATCH','action'=>['WaiterController@update',$commande->id]])  !!}
                	<input type="hidden" name="cstate_id" value="7">
                    {!! Form::submit('served',['class'=>'btn btn-outline-success']) !!}
                    {!! Form::close() !!}
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif







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
