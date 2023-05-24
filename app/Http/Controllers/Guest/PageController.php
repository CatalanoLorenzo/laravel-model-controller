<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();
        $data = [$movies];
        #dd($movies);
        return view('welcome',$data);

    }
}
