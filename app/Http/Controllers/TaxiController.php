<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxiController extends Controller
{
    public function taxi_form(){
        return view('taxi.taxi_form');
    }
}
