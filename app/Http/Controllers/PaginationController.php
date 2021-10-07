<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
class PaginationController extends Controller
{
    public function allUser(){
        $users =User::paginate(10);
        return view('users',compact('users'));
    }
}
