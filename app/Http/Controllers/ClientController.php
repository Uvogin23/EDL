<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Commande;
use App\Order;
use App\Plate;
use App\Pstate;
use App\Ptype;
use App\Cstate;
use App\Ctype;
use App\Role;
use App\Contact;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas=Plate::where('ptype_id','1')->get();
           $tacoss=Plate::where('ptype_id','2')->get();
           $hamburgers=Plate::where('ptype_id','3')->get();
           $refreshments=Plate::where('ptype_id','4')->get();
           $plates=Plate::where('ptype_id','5')->get();
           $desserts=Plate::where('ptype_id','6')->get();
           $soufflets=Plate::where('ptype_id','7')->get();
           $crepes=Plate::where('ptype_id','8')->get();
           
           return view('Client.index',compact('plates','pizzas','tacoss','hamburgers','refreshments','desserts','soufflets','crepes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
         
         'number'=>'required|integer|max:790000000|min:540000000',
        ]);
        $Commande=Commande::create(['ctype_id'=>'1','cstate_id'=>'6','number'=>$request['number'],'price'=>'0']);
        $orders=$request->menu;
        $price=0;
        if(empty($orders)){
            return redirect()->back();
        }else{
        foreach ($orders as $order) {
            $plate=Plate::findOrFail($order);
            Order::create(['plate_id'=>$order,'commande_id'=>$Commande->id,'number'=>$request[$order]]);
            $price=$price+($plate->price * $request[$order] );
        }
        $com=Commande::findOrFail($Commande->id);
        $com->price=$price;
        $com->save();
        Session::flash('Order_passed_message','Order Id: '.$com->id.' Price: '.$com->price.' your order is passed, you can check its state through the CheckOrder platform ');
        $Commande=Commande::where('number',$com->number)->get();
       return view('Client.check',compact('Commande'));
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $com=Commande::findOrFail($id)->delete();
        $Commande=Commande::where('number',$request['number'])->get();
        
        Session::flash('OrderDeleted','your order has been deleted ');
        return view('Client.check',compact('Commande'));
        
    }

    public function check(Request $request){
        $this->validate($request,[
         
         'number'=>'required|integer|max:790000000|min:540000000',
        ]);

        $Commande=Commande::where('number',$request['number'])->get();
        return view('Client.check',compact('Commande'));

    }

    public function contact(Request $request){
        $this->validate($request,[
         
         'text'=>'required|string',
         'email'=>'required|email',
        ]);
        $contact=Contact::create($request->all());
        return redirect()->back();
    }
}
