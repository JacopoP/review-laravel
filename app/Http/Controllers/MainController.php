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
}
