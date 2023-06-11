<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //metodo convenzionalmente chiamato 'index', recupera tutte le info dal db
    public function getMovies()
    {
        return view('movies');
    }

}