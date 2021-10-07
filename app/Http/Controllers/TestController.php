<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getFirstLastName(){
        return splitName("Mohammed Mustafa");
    }
}
