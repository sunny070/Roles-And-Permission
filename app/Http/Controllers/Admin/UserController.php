<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{
    public function index(){
        $users= User::all();
        return view('admin.user.index',compact('users'));
    }
    public function show(User $user){
        $roles=Role::all();
        $permissions =Permission::all();
        return view('admin.user.role',compact('user','roles','permissions'));
    }
    // public function destroy(User $user){

    // }
}
