<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Comicbook;

class SearchController extends Controller
{
    
    public function search(Request $request)
    {
    	$search = $request->input('q');

    	$artists = Artist::where(function ($query) use ($search) {
    		$query->where('name', 'LIKE', '%' . $search . '%');
    	})->get();

    	$comics = Comicbook::where(function ($qry) use ($search) {
    		$qry->where('name', 'LIKE', '%' . $search . '%');
    	})->get();

    	return view('search.results',compact('artists','comics', 'search'));
    	//return $request::all();
    }
}
/*public function index(Request $request){
    $category = $request->input('category');

    //now get all user and services in one go without looping using eager loading
    //In your foreach() loop, if you have 1000 users you will make 1000 queries

    $users = User::with('services', function($query) use ($category) {
         $query->where('category', 'LIKE', '%' . $category . '%');
    })->get();

    return view('browse.index', compact('users'));
}*/