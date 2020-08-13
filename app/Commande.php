<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable=['cstate_id','ctype_id','price','number'];

    public function Order(){
        return $this->hasMany('App\Order');
    }

    public function Cstate(){
        return $this->belongsTo('App\Cstate');
    }

    public function Ctype(){
        return $this->belongsTo('App\Ctype');
    }

    
}
