<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //metodo convenzionalmente chiamato 'index', recupera tutte le info dal db
    public function index()
    {
        $movies = Movie::all();

        // dd($movies);

        return view('home', compact('movies'));
    }
}