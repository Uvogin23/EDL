<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home',function(){
  if (Auth::guest()) {
    return view('welcome');
  }
  else{
    switch (Auth::user()->role->name) {
      case 'server':
         return view('Waiter.index');
        break;
      case 'manager':
         return view('Manager.Commandes.index');
        break;
      case 'cook':
         return view('Cook.index');
        break;
      case 'delivery':
         return view('Delivery.index');
        break;
      case 'cashier':
         return view('Cashier.index');
        break;
    }
  }
});

Route::get('/Cook/menu','CookController@menu');

Auth::routes();

Route::get('/Client/Contact', 'ClientController@contact');
Route::get('/Client/Check','ClientController@check');
Route::get('/Client/tracker',function(){
  return view('/Client/tracker');
});
Route::resource('Client','ClientController');


///////////////MANAGER/////////////

Route::group(['middleware'=>'Manager'],function(){
   Route::get('Manager/Contact','ManagerController@contact');
   Route::resource('Manager/Users','ManagerController');
   Route::resource('Manager/Plates','ManagerPlatesController');
   Route::resource('Manager/TS','StateTypeController');
   Route::resource('Manager/Commandes','ManagerCommandeController');
   Route::get('/Manager/Commandes/data',function(){
       return view('Manager.Commandes.data');
   });
   Route::get('/datafolder/data', function () {
    $data=App\Commande::all()->sortBy('created_at');
    return view('/datafolder/data',compact('data'));
});
   Route::get('Manager/Commandes/Stats','ManagerCommandeController@stats');
   });

   
   
/////////////////////:SERVER//////////////

Route::group(['middleware'=>'Serveur'],function(){
Route::get('/Waiter/Order','WaiterController@order');
Route::resource('Waiter','WaiterController');
Route::get('/datafolder/data6Waiter',function(){
  $new=App\Commande::where('cstate_id','6')->orderBy('created_at','desc')->get();
  $ready=App\Commande::where('cstate_id','1')->orderBy('updated_at','desc')->get();
  return view('/datafolder/data6Waiter',compact('new','ready'));
});

});




///////////////////CASHIER////////////////

Route::group(['middleware'=>'Cashier'],function(){
Route::get('/Cashier/payed','CashierController@payed');
Route::resource('Cashier','CashierController');

Route::get('/datafolder/data4',function(){
  $data=App\Commande::all()->sortBy('updated_at');
  return view('/datafolder/data4',compact('data'));
});
});


//////////////:COOK/////////////
Route::group(['middleware'=>'Cook'],function(){
Route::get('/Cook/Plates','CookController@plates');
Route::resource('Cook','CookController');
Route::get('/datafolder/data5Cook',function(){
  $data=App\Commande::all()->sortBy('created_at');
  return view('/datafolder/data5Cook',compact('data'));
});
});

/////////////////DELIVERY//////////////

Route::group(['middleware'=>'delivery'],function(){
Route::resource('Delivery','DeliveryController');
Route::get('/datafolder/data3',function(){
  $data=App\Commande::all()->sortBy('created_at');
  return view('/datafolder/data3',compact('data'));
});
});
