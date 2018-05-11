<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comicbook;
use DB;

class ComicbookController extends Controller
{
    
    public function index()
    {

    	$comicbooks = Comicbook::orderBy('created_at', 'desc')->get();

    	return view('comicbooks.index', compact('comicbooks'));
    }

    public function show($comicbook) 
    {
        $comicbooks = Comicbook::find($comicbook);

        $artists = DB::table('artists')->where('comicbooks_id', '=', $comicbook)->get();

        $series = DB::table('series')->where('comicbooks_id', '=', $comicbook)->get();

        //dd($comicbooks);
        
        return view('comicbooks.show', compact('comicbooks','artists','series'));
    }

    public function edit($comicbook)
    {
        //find comicbook you want to edit
        $comicbooks = Comicbook::findorFail($comicbook);
        //$comicbooks = Comicbook::where('id', '=', $comicbook)->first();

        return view('comicbooks.edit', compact('comicbooks', 'comicbook'));
    }

    public function update(Request $request, $comicbook)
    {
        //$comicbooks = new Comicbook();
        $data = $this->validate($request, [
            'name' => 'required',
            'avg_rating' => 'required'
        ]);
        //$data['id'] = $comicbook;
        //$comicbooks->updateQuery($data);
        
        $comicbooks = Comicbook::findorFail($comicbook);

        //$comicbooks = Comicbook::where('id', '=', $comicbook)->first(); 

        //update fields you want to update
        $comicbooks->name = $request->get('name');
        $comicbooks->issue_no = $request->get('issue_no');
        $comicbooks->description = $request->get('description');
        $comicbooks->avg_rating = $request->get('avg_rating');

        //save to the database
        //$comicbooks->update();
        $comicbooks->save();

        //return view('comicbooks', compact('comicbooks'));

        //redirect to comicbook page
        //return redirect('/comicbooks' . $comicbooks);
        //dd($request->all());
        flash('Update Successful!');
        return redirect('/comicbooks');
    }

   /* public function updateQuery($data)
    {

        $comicbooks = $this->find($data['id']);
        $comicbooks->name = $data['name'];
        $comicbooks->issue_no = $data['issue_no'];
        $comicbooks->description = $data['description'];
        $comicbooks->avg_rating = $data['avg_rating'];

        $comicbooks->save();
        return 1;  */

    //}

    public function create() 
    {

        return view('comicbooks.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|unique:comicbooks|max:20',
            'issue_no' => 'required',
            'description' => 'required',
            'avg_rating' => 'numeric|required|between:0,5'
        ]);

        //create a new comicbook using the request data
        $comicbooks = new Comicbook;

        $comicbooks->name = request('name');
        $comicbooks->issue_no = request('issue_no');
        $comicbooks->description = request('description');
        $comicbooks->avg_rating = request('avg_rating');

        //save it to the database
        $comicbooks->save();

        //redirect to comicbook page
        return redirect('/comicbooks');

    }
}
