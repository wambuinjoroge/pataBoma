<?php

namespace App\Http\Controllers;

use App\RoleUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index(){

        $users = User::all();
        return view('centaur.users.index',compact('users'));
    }

    public function create(){
        return view ('centaur.users.create');
    }

    //create  a user along with his/role
     public function role_user($user_id){

     }


    public function store(Request $request){


        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',

            ]);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->first_name=$request->get('first_name');
        $user->last_name=$request->get('last_name');
        $user->email=$request->get('email');
        $user->password=$request->get('password');


        $user->save();


        return redirect('/users');
    }
//    update and delete
}
