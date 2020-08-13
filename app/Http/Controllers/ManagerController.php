<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ManagerRegistrationRequest;
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


class ManagerController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all()->sortBy('role_id');
        $roles=Role::pluck('name','id')->all();
        return view('Manager.Users.index',compact('users','roles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'okey c';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManagerRegistrationRequest $request)
    {
        $data=$request;
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'number'=> $data['number'],
            'role_id'=>$data['role_id'],
            'password' => bcrypt($data['password']),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users=User::all();
        $roles=Role::pluck('name','id')->all();
        return view('Manager.Users.Users',compact('users','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        $roles=Role::pluck('name','id')->all();
        return view('Manager.Users.edit_user',compact('user','roles'));
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
        $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:users',
            'number'=> 'required|integer|max:9999999999|unique:users',
            'role_id'=>'required|integer',

        ]);
        $data=$request->all();
        $data1=[];
        if($data['email']!=null){
            $data1['email']=$data['email'];
        }
        if($data['number']!=null){
            $data1['number']=$data['number'];
        }
        if($data['role_id']!=null){
            $data1['role_id']=$data['role_id'];
        }
        
        $user=User::findOrFail($id)->update($data1);
        return redirect('/Manager/Users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function contact(){
    $contacts=Contact::orderBy('created_at','desc')->get();
    return view('Manager.Users.Contact',compact('contacts'));
    }


    
}
