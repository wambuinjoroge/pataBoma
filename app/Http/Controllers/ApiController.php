<?php

namespace App\Http\Controllers;

use App\House;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    private function prepareResult($status, $data, $errors,$msg)

    {

        return ['status' => $status,'data'=> $data,'message' => $msg,'errors' => $errors];

    }

    //access the token
    public function accessToken( Request $request){

        $validate = $this->validations($request,'/login');

        if ($validate["error"]){
            return $this->prepareResult(false,[],$validate["errors"],"Error while validating user");
        }

//        request user email
        $user_email = User::where('email',$request->email)->first();

        if ($user_email){
//        check if input is the same as the current user password
            if (Hash::check($request->password,$user_email->password)){
                return $this->prepareResult(true,["accessToken" => $user_email->createToken("House")->accessToken],[],"User verified");
            }else{
                return $this->prepareResult(false,[],["password" => "Wrong password"],"Entered password does not match");
            }
        }else{
            return $this->prepareResult(false,[],["email" => "Unable to find user"],"Entered email not found");
        }
    }

//    Next, I will create a function through which a user can get,create,update and delete houses.
    public function validations($request,$type){

        if ($type == "login"){

            $validator = Validator::make($request->all(),[
               'email' => 'required',
               'password' => 'required'
            ]);
            if ($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

        }elseif ($type == "create house"){

            $validator = Validator::make($request->all(),[
                'house_number' => 'required'
            ]);
            if ($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

        }elseif ($type == "update house"){

            $validator = Validator::make($request->all(),[
                'email' => 'filled',
                'password' => 'filled'
            ]);
            if ($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

        }
    }

    public function index(Request $request){

        return $this->prepareResult(true,$request->user()->houses()->get(),[],"All houses");

    }

    public function show(Request $request, $id){

        $house = House::findOrFail($id);

        if ($id == $request->user()->id){

            return $this->prepareResult(true,$house,[],"House fetched");

        }else{

            return $this->prepareResult(false,[],"unauthorized","You are not authenticated to view this house");

        }

    }

    public function store(Request $request){

        $error = $this->validations($request,"create house");

        if ($error['error']) {

            return $this->prepareResult(false, [], $error['errors'],"Error in creating house");

        } else {

            $house = new House();
            $house->house_number=$request->get('house_number');

            $house->save();

            return $this->prepareResult(true, $house, $error['errors'],"House created");

        }
    }
    public function update(Request $request,$id){

        if ($id == $request->user()->id){

            $error = $this->validations($request,"update house");

            if ($error['error']) {

                return $this->prepareResult(false, [], $error['errors'],"error in updating data");

        }else{

                $house = House::findOrFail($request->id);
                $house->house_number=$request->get('house_number');

                $house->save();

                return $this->prepareResult(true,$house,[],"House updated successfully");
            }
        }else{
            return $this->prepareResult(false,[],"unauthorized","You are not authenticated to edit this house");
        }
    }

    public function destroy(Request $request,$id){

        if($id == $request->user()->id){
            $house = House::findOrFail($id);
            $house->delete();

            return $this->prepareResult(true,$house,[],"House deleted");
        }else{
            return $this->prepareResult(false,[],"unauthorized","You are not authenticated to edit this house");
        }
    }

}
