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

class StateTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ptypes=Ptype::all();
        $pstates=Pstate::all();
        return view('Manager.TS.index',compact('ptypes','pstates'));
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
        $action=$request['action'];
        switch($action){
           case 'storetype'  : Ptype::create($request->all());
           return redirect()->back();
           break;
           case 'storestate' : Pstate::create($request->all());
           return redirect()->back();
           break;
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
    public function destroy($id)
    {
        //
    }
}
