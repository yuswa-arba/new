<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaymentStatus extends Model
{
    protected $table='payment_status';
    protected $fillable=['id','status'];
    public $timestamps=false;

    public function Payment(){
        return $this->hasMany('App\Model\Payment');
    }
}
