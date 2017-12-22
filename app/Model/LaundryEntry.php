<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LaundryEntry extends Model
{
    protected $primaryKey = 'id_laundry_entry';

    protected $table = 'laundry_entry';
    protected $fillable = ['id_register', 'date', 'amount', 'type', 'total_payment'];
    public $timestamps = false;

    public function Register()
    {
        return $this->belongsTo('App\Model\Register', 'id_register','id_register');
    }

    public function laundryOut()
    {
        return $this->hasMany('App\Model\LaundryOut');
    }
}
