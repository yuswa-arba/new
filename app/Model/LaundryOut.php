<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LaundryOut extends Model
{
    protected $primaryKey = 'id_laundry_out';

    protected $table = 'laundry_out';
    protected $fillable = ['id_laundry_entry', 'date'];
    public $timestamps = false;

    public function LaundryEntry()
    {
        return $this->belongsTo('App\Model\LaundryEntry', 'id_laundry_entry','id_laundry_entry');
    }

    public function Payment()
    {
        return $this->hasMany('App\Model\Payment');
    }
}
