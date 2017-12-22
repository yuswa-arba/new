<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LaundryStatus extends Model
{
    protected $primaryKey = 'id_laundry_status';

    protected $table = 'laundry_status';
    protected $fillable=['status'];
    public $timestamps = false;

    public function LaundryData()
    {
        return $this->hasMany('App\Model\LaundryData');
    }
}
