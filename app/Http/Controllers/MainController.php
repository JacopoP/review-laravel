<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;

class MainController extends Controller
{
    public function home(){
        $things = Thing::all();
        return view('pages.home', compact('things'));
    }

    public function selectThing($id){
        $thing = Thing::find($id);
        return view('pages.single', compact('thing'));
    }

    public function goCreate(){
        return view('pages.create');
    }

    public function addThing(Request $request){
        $data = $request->all();
        $thing = new Thing();
        $thing->name=$data['name'];
        $thing->a_number=$data['a_number'];
        $thing->a_date=$data['a_date'];
        $thing->price=$data['price'];
        $thing->save();
        return redirect()->route('home');
    }
}
