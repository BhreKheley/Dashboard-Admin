<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;

class filmController extends Controller
{
    //
    public function index(){
        return  view('film.all', [
            'films' => film::all()
        ]);
    }

    public function show(film $film){
        return view('film.detail', [
            'film' => $film
        ]);
    }
}
