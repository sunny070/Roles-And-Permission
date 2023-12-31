<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('admin.permissions.index',compact('permissions'));
    }
    public function create(){
        return view('admin.permissions.create');
    }
    public function store(Request $request){
        $validate = $request->validate(['name'=>['required']]);
        Permission::create($validate);
        return to_route('admin.permissions.index')->with('message','Permission Created!');
    }
    public function edit(Permission $permission){
        $roles= Role::all();
        return view('admin.permissions.edit',compact('permission','roles'));
    }



    public function update(Request $request , Permission $permission){
        $validate = $request->validate(['name'=>'required']);
        $permission->update($validate);

        return to_route('admin.permissions.index')->with('message','Permission Updated!');

    }


    public function destroy(Permission $permission){
        $permission->delete();
        return back()->with('message','Permission Deleted!');

    }
    public function assignRole(Request $request, Permission $permission){
        if($permission ->hasRole($request->role)){
            return back()->with('message','Role Exists!');
        }
        $permission->assignrole($request->role);
        return back()->with('messsage','Role Assigned!');
    }


    
    public function removeRole(Permission $permission,Role $role){
        if($permission->hasRole($role)){
            $permission->removeRole($role);
            return back()->with('messsage','Role Removed!');
        }
        return back()->with('messsage','Role Does Not Exist!');
    }
}
