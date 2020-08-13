<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['commande_id','number','plate_id'];

    public function Plate(){
        return $this->belongsTo('App\Plate');
    }

}
