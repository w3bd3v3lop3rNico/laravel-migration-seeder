<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        // $movies = Movie::where('vote', '>', 8 )->get();
        // // dd($movies);
        return view('welcome');
    }
}
