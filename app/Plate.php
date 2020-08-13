<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    protected $fillable=['name','price','ingredients','pstate_id','ptype_id'];

    public function Ptype(){
        return $this->belongsTo('App\Ptype');
    }

    public function Pstate(){
        return $this->belongsTo('App\Pstate');
    }
}
