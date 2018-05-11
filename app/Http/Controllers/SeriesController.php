<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use App\Comicbook;

class SeriesController extends Controller
{
    
    public function index()
    {

    	$query = Series::all();

    	return view('series.index', compact('query'));
    }

    public function show($series) 
    {
        $qry = Series::find($series);

        //dd($comicbooks);
        
        return view('series.show', compact('qry'));
    }

    public function edit($series)
    {
        //find comicbook you want to edit
        $query = Series::findorFail($series);
		$q = Comicbook::all();

        return view('series.edit', compact('series', 'query', 'q'));
    }

    public function update(Request $request, $series)
    {
        
        $data = $this->validate($request, [
            'title' => 'required',
            'comicbook' => 'required'
        ]);
        
        $query = Series::findorFail($series);

        //update fields you want to update
        $query->title = $request->get('title');
        $query->description = $request->get('description');
        $query->comicbooks_id = $request->get('comicbook');

        //save to the database
        $query->save();

        //redirect to comicbook page
        flash('Update Successful!');
        return redirect('/series');
    }

    public function create() 
    {

    	$qry = Comicbook::all();

        return view('series.create', compact('qry'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|unique:series|max:50',
            'description' => 'required',
            'comicbook' => 'required'
        ]);

        //create a new comicbook using the request data
        $query = new Series;

        $query->title = request('title');
        $query->description = request('description');
        $query->comicbooks_id = request('comicbook');

        //save it to the database
        $query->save();

        //redirect to comicbook page
        return redirect('/series');

    }
}
