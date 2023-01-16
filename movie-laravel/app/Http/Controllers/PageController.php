<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        // 'select * from movie'
        $all_movie = Movie::all();

        // dd($all_movie);

        return view('welcome', $all_movie );
    }
}
