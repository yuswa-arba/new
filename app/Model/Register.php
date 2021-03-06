<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register';
    public $timestamps = false;

    public function LaundryEntry()
    {
        return $this->hasMany('App\Model\LaundryEntry');
    }
}
