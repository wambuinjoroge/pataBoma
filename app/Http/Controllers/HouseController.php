<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HouseController extends Controller
{
    //
    public function index(){

        $houses = House::all();
        return json_encode($houses);
//        return view('houses.index',compact('houses'));
    }


    public function create(){
        return view ('houses.create');
    }

    //create  a user along with his/role
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'house_number' => 'required',


        ]);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $house = new House();
        $house->house_number=$request->get('house_number');


        $house->save();

        return redirect('/houses');
    }


    public function show(){
        
    }
}
