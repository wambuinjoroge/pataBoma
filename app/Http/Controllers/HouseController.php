<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index(){

        $result = Auth::user()->houses()->get();

        $houses = House::all();

        return view('houses.index',compact('houses','result'));

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


    public function show($id){

       $house = House::where('id',$id)->first();

       return view('houses.show',compact('house'));

    }

    public function edit($id)
    {
        $house = House::findOrFail($id);
        return view('houses.edit',compact('house'));
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'house_number' => 'required',


        ]);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $house = House::findOrFail($request->id);
        $house->house_number=$request->get('house_number');

        $house->save();

        return redirect('/houses');
    }

    public function destroy($id){

        $house = House::findOrFail($id);
        $house->delete();
        return redirect('/houses');
    }
}
