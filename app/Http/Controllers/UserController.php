<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
class UserController extends Controller
{
    public function index(Request $request){
        return $request->fullUrl();
    }
    public function insertRecord(){
        $phone=new Phone();
        $phone->phone='01124711700';
        $user =new User();
        $user->name='Mohammed';
        $user->email='admin@admin.com';
        $user->password=encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return'Record Has Been Created Successfully!';
    }
    public function getUserPhone($id){
        $phone  = User::find($id)->phone;
        return  $phone;
    }
}
