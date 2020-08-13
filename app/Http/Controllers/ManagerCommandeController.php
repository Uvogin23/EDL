<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Manager.Commandes.index');
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

    public function stats(){
        
    }
}
