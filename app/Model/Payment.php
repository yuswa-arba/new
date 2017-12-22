<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'id_payment';

    protected $table = 'payment';
    protected $fillable = ['id_laundry_out', 'id_payment_status', 'payment'];
    public $timestamps = false;

    public function LaundryOut()
    {
        return $this->belongsTo('App\Model\LaundryOut', 'id_laundry_out','id_laundry_out');
    }

    public function PaymentStatus()
    {
        return $this->belongsTo('App\Model\PaymentStatus', 'id_payment_status','id_payment_status');
    }

    public function LaundryData()
    {
        return $this->hasMany('App\Model\LaundryData');
    }
}
