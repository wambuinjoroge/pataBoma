<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    //
    public function index(){

        $roles = Role::all();
        return view('centaur.roles.index',compact('roles'));
    }

    public function create(){
        return view ('centaur.roles.create');
    }

    //create  a user along with his/role
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'slug' => 'required',
            'name' => 'required',
            'permissions' => 'required',

        ]);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $role = new Role();
        $role->slug=$request->get('slug');
        $role->name=$request->get('name');
        $role->permissions=$request->get('permissions');

        $role->save();

        return redirect('/roles');
    }
}
