<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class MainController extends Controller
{
    public function index(){

        $films = Movie::all();

        return view('home' , [
            'films' => $films
        ]);


    }


    public function singlefilm($id){

        $film= Movie::find($id);

        if(!$film){
            abort(404);
        }

        return view('single-film' , [
            'film' => $film
        ]);


    }
}
