<?php

namespace App\Http\Controllers;

use App\Role;
use App\RoleUser;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index(){

        $users = User::all();
        return view('centaur.users.index',compact('users'));
    }
//    public function getUser(){
//
//        $client = new Client();
//        $token="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImNkNzBkNjcwN2MwNTY0NmJiMGVmZGI4YTEyNTQzMjVmOTA2ZWYwODRkMjdiZmZkMmFjODA4ZDU4MmNmNTFkZjUxZDIxM2UxNjNiNTlkNTQ2In0";
//        $url="localhost:7000/api/user";
//
//        //echo $token;exit;
//
//
//        $res = $client->request('GET', $url, [
//            'headers' => [
//                'Accept' => 'application/json',
//                'Content-Type' => 'application/json',
//                'Authorization' => 'Bearer ' . $token
//            ]
//        ]);
//
//        print_r($res->getBody()->getContents());
//    }

    public function create(){
        return view ('centaur.users.create');
    }

    //create  a user along with his/role
     public function role_user($user_id){

     }


    public function store(Request $request){
    //all that is needed is the slot for adding a role to a user while creating him/her

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

//        foreach ($request->get('roles',[]) as $slug => $id){
//            $role = Sentinel::findRoleById($slug);
//            if($role){
//                $role->users()->attach($user);
//            }
//        }

        $roles = Sentinel::getRoles();
//        print_r($roles);exit();
        $user->save();
        
        return redirect('/users',compact('roles'));
    }

    public function show($id){

        $user = User::findOrFail($id)->get();
        return view('users.show',compact('user'));

    }
//    update and delete
}
