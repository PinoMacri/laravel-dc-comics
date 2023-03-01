<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index (){
        $images=config("images");
        $comics=Comic::all();
        return view("home", compact("images","comics"));
    }
   /*public function links(){
        $links = config('menu');
        return view("home", compact("images","comics"));
    } */
}