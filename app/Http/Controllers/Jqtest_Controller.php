<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jqtest_Controller extends Controller
{
    public function test() {
        return view('jq_test.index');
    }
}
