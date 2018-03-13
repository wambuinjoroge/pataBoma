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

        //trying to add role to current user
        $user_id = User::find($id);
//        print_r($user_id);exit;


        $role = new Role();
        $role->slug=$request->get('slug');
        $role->name=$request->get('name');
        $role->permissions=$request->get('permissions');

        $data = DB::table('users')->join('roles','users.id','=','roles.user_id')
            ->select('roles.id','users.id')
            ->where('users.id',$user_id)->get();
        print_r($data);exit;

        $role = RoleUser::insert([$data]);
//        use of update and insert in db
        $role->save();

        return redirect('/roles');
    }
//    update and delete
}
