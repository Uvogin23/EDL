<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ManagerPlateRequest;
use App\User;
use App\Commande;
use App\Order;
use App\Plate;
use App\Pstate;
use App\Ptype;
use App\Cstate;
use App\Ctype;
use App\Role;

class ManagerPlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plates=Plate::all()->sortBy('ptype_id');
        $ptypes=Ptype::pluck('name','id')->all();
        $pstates=Pstate::pluck('name','id')->all();
        return view('Manager.Plates.index',compact('plates','ptypes','pstates'));
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
            'name'=>'required|string|max:255',
            'price'=>'required',
            'ingredients'=>'required',
            'pstate_id'=>'required|integer',
            'ptype_id'=>'required|integer',
        ]);
        Plate::create($request->all());
        return redirect()->back();
             
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
        $plate=Plate::findOrFail($id);
        $ptypes=Ptype::pluck('name','id')->all();
        $pstates=Pstate::pluck('name','id')->all();
        return view('Manager.Plates.edit_plate',compact('plate','ptypes','pstates'));

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
        $data=$request->all();
        /*$this->validate($request,[
            'price'=>'required',
            'ingredients'=>'required',
            'pstate_id'=>'required|integer',
            'ptype_id'=>'required|integer',
        ]);*/
        $data1=[];
        if($data['price']!=null){
            $data1['price']=$data['price'];
        }
        if($data['ingredients']!=null){
            $data1['ingredients']=$data['ingredients'];
        }
        if($data['pstate_id']!=null){
            $data1['pstate_id']=$data['pstate_id'];
        }
        if($data['ptype_id']!=null){
            $data1['ptype_id']=$data['ptype_id'];
        }

        
        Plate::findOrFail($id)->update($data1);
        return redirect('/Manager/Plates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
