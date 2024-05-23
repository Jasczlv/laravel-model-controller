<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {

        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies'));
    }
    public function contatti()
    {
        return view('contact');
    }
}
