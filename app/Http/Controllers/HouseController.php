<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //
    public function create(){
        return view ('house.create');
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
}
