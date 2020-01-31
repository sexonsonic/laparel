<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function iya(){
        $film = Film::all();
        return view('film',compact('film'));
    }

    public function iyaiya($id){
        $film = Film::findOrFail($id);
        return view('film1',compact('film'));
    }
}
