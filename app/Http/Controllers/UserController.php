<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function create(){
        return view ('users.create');
    }

    //create  a user along with his/role
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required',

            ]);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();


    }
}
