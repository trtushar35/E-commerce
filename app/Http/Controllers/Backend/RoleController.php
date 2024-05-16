<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function list(){
        $roles = Role::all();
        return view('admin.pages.role.list', compact('roles'));
    }

    public function create(){
        return view('admin.pages.role.create');
    }

    public function store(Request $request){
        // dd($request->all());

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'status'=>'required'
        ]);

        if($validate->fails()){
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        Role::create([

            'name' => $request -> name,
            'description' => $request -> description,
            'status' => $request -> status
        ]);

        notify()->success("Role created successfully");
        return redirect()->route('role.list');
    }
}
