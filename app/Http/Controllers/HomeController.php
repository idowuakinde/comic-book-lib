<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comicbook;
use App\Series;
use App\Artist;
use DB;

class HomeController extends Controller
{
    
    public function index()
    {

    	$comicbooks = Comicbook::take(3)->get();

    	$artists = Artist::take(3)->get();

    	$series = Series::take(3)->get();

    	return view('index', compact('comicbooks', 'artists', 'series'));
    }
}
