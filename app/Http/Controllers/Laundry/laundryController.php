<?php

namespace App\Http\Controllers\Laundry;

use App\Model\LaundryData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class laundryController extends Controller
{
    public function viewLaundry(){
        $laundrys = LaundryData::all();
        return view('page/laundry', compact('laundrys'));
//    return $laundrys->LaundryStatus;
    }
}
