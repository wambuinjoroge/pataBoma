<?php

namespace App\Http\Controllers;

use App\Role;
use App\RoleUser;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    //
    public function index(){

        $roles = Role::all();
        return view('centaur.roles.index',compact('roles'));
    }

    public function create(){
        $user = Auth::user();
//        print_r($user->id);exit;
        return view ('centaur.roles.create',compact('user'));
    }


    public function store(Request $request, $id){
        //trying to add role to current user
        $user = User::find($id);
        $user_id = $user->id;
//      print_r($user_id->id);exit;
//      print_r($request->all());
//      exit;
//      We want to get the id of the user in question(whose role we are adding) instead of the the one logged in,
//      so here comes the twist, are you going to be changing the one who is logged in or the one in question??
//      who is logged in or what????

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

        $role_id = $role->id;
//        print_r($role_id);exit();
//      So, we now have the two ids. How do we post them to the role_user table
        $role_user = new RoleUser();
        $role_user->role_id = $role_id;
        $role_user->user_id = $user_id;
//        print_r($role_user);exit;
        $role_user->save();

        return redirect('/roles');
    }
//    update and delete
}
