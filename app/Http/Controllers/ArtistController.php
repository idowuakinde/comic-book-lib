<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Artist;
use App\Comicbook;

class ArtistController extends Controller
{
    
    public function index()
    {

    	$artists = Artist::all();

    	return view('artists.index', compact('artists'));
    }

    public function edit($artist)
    {
        //find artist you want to edit
        $artists = Artist::findorFail($artist);

        $query = Artist::all();

        $q = Comicbook::all();

        $qry = Role::all();
        
        return view('artists.edit', compact('artists', 'artist', 'query', 'q', 'qry'));
    }

    public function update(Request $request, $artist)
    {
        $data = $this->validate($request, [
            'name' => 'required',
        ]);
        
        $artists = Artist::findorFail($artist);

        //update fields you want to update
        $artists->name = $request->get('name');
        $artists->roles_id = $request->get('role');
        $artists->comicbooks_id = $request->get('comicbook');

        //save to the database
        $artists->save();

        //redirect to artist page
        flash('Update Successful!');
        return redirect('/artists');
    }

    public function create() 
    {

        $qry = Comicbook::all();
        $qr = Role::all();

        return view('artists.create', compact('qry', 'qr'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:90',
            'comicbook' => 'required',
            'role' => 'required'
        ]);

        //create a new comicbook using the request data
        $query = new Artist;

        $query->name = request('name');
        $query->roles_id = request('role');
        $query->comicbooks_id = request('comicbook');

        //save it to the database
        $query->save();

        //redirect to comicbook page
        return redirect('/artists');

    }
}
