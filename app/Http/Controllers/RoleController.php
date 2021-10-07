<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
class RoleController extends Controller
{
    public function addRole(){
        $roles=[
            ['role'=>'Admin'],
            ['role'=>'Editor'],
            ['role'=>'Author'],
            ['role'=>'Contributor'],
            ['role'=>'Subscribers'],
        ];
        Role::insert($roles);
        return 'Roles Are Careated Suceesfuly';
        
    }
    public function addUsers(){
        $user=new User();
        $user->name='Mohammed';
        $user->email='admin2@admin.com';
        $user->password=encrypt('secret');
        $user->save();

        $rolesid=[3,4,5];
        $user->roles()->attach($rolesid);
        return 'rolesid Are Careated Suceesfuly';
        
    }
    public function  getAllRolesByUser($id){
        $user =User::find($id);
        $roles = $user->roles;
        return $roles;
    }
    public function  getAllUserByRole($id){
        $role =Role::find($id);
        $users = $role->users;
        return $users;
    }
}
