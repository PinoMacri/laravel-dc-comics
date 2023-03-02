<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    public function index (){
        $images=config("images");
        $comics=Comic::all();
        return view("comics.index", compact("images","comics"));
    }

    public function create(){
        return view("comics.create");
    }
    public function store(Request $request){
        $data=$request->all();
        $comic=new Comic();
        $comic->title=$data["title"];
        $comic->description=$data["description"];
        $comic->thumb=$data["thumb"];
        $comic->price=$data["price"];
        $comic->series=$data["series"];
        $comic->sale_date=$data["sale_date"];
        $comic->type=$data["type"];
        $comic->artists=$data["artists"];
        $comic->writers=$data["writers"];
        $comic->save();
        return to_route("comics.show" , $comic->id);
    }
    public function show (string $id){
        $comic=Comic::findOrFail($id);
        return view("comics.show", compact("comic"));
    }

    public function edit (string $id){
        $comic=Comic::findOrFail($id);
        return view("comics.edit", compact("comic"));
    }

    public function update (Request $request, string $id){
        $comic=Comic::findOrFail($id);
        $data=$request->all();
        $comic=new Comic();
        $comic->title=$data["title"];
        $comic->description=$data["description"];
        $comic->thumb=$data["thumb"];
        $comic->price=$data["price"];
        $comic->series=$data["series"];
        $comic->sale_date=$data["sale_date"];
        $comic->type=$data["type"];
        $comic->artists=$data["artists"];
        $comic->writers=$data["writers"];
        $comic->save();
        return to_route("comics.show" , $comic->id);
    }
}