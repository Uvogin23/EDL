<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','role_id','number','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Role(){
        return $this->belongsTo('App\Role');
    }

    public function isManager(){
        if($this->role->name=='manager'){
            return true;
        }
        return false;
    }

    public function isServer(){
        if($this->role->name=='server'){
            return true;
        }
        return false;
    }

    public function isCook(){
        if($this->role->name=='cook'){
            return true;
        }
        return false;
    }

    public function isCashier(){
        if($this->role->name=='cashier'){
            return true;
        }
        return false;
    }

    public function isDelivery(){
        if($this->role->name=='delivery'){
            return true;
        }
        return false;
    }

    
}
