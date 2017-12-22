<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LaundryData extends Model
{
    protected $primaryKey = 'id_laundry_data';

    protected $table = 'laundry_data';
    protected $fillable = ['id_payment', 'id_laundry_status'];
    public $timestamps=false;

    public function LaundryStatus(){
        return $this->belongsTo('App\Model\LaundryStatus', 'id_laundry_status','id_laundry_status');
    }
    public function Payment()
    {
        return $this->belongsTo('App\Model\Payment', 'id_payment','id_payment');
    }
}
