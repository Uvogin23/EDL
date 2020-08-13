<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Commande;
use App\Order;
use App\Plate;
use App\Pstate;
use App\Ptype;
use App\Cstate;
use App\Ctype;
use App\Role;

class WaiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Waiter.index');
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
         
         'number'=>'required|integer|max:15|min:1',
        ]);
        $Commande=Commande::create(['ctype_id'=>'2','cstate_id'=>'6','number'=>$request['number'],'price'=>'0']);
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
        return view('Waiter.index');}

    }

    /*$photos=Photo::findOrFail($request->checkBoxArray);
        foreach($photos as $photo){
            $photo->delete();
        }
        return redirect()->back();*/

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
        Commande::findOrFail($id)->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Commande::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function order(){
       
        
           $pizzas=Plate::where('ptype_id','1')->get();
           $tacoss=Plate::where('ptype_id','2')->get();
           $hamburgers=Plate::where('ptype_id','3')->get();
           $refreshments=Plate::where('ptype_id','4')->get();
           $plates=Plate::where('ptype_id','5')->get();
           $desserts=Plate::where('ptype_id','6')->get();
           $soufflets=Plate::where('ptype_id','7')->get();
           $crepes=Plate::where('ptype_id','8')->get();
           
           return view('Waiter.Order',compact('plates','pizzas','tacoss','hamburgers','refreshments','desserts','soufflets','crepes'));
           
    }
}
