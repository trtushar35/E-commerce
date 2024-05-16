<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function permission($roleId){
        $all_permissions = Permission::all();
        $role = Role::with('permissions')->find($roleId);
        // dd($all_permission->all());
        return view('admin.pages.role.assign', compact('role', 'all_permissions'));
    }

    public function permissionAssign(Request $request, $roleId){
        // dd($request->all());

        RolePermission::where ('role_id', $roleId)->delete();

        foreach ($request->permissions as $permission_id) {

            RolePermission::create([
                'role_id' => $roleId,
                'permission_id' => $permission_id
            ]);
        }

        notify()->success("Permission assigned successfully.");
        return redirect()->back();
    }
}
