@extends('layouts.layout')

@section('content')
	<h3>Edit {{$artists->name}} Information</h3>

<hr>
	<form method="post" action="{{action('ArtistController@update', $artist)}}">
		{{ method_field('PATCH') }}

		@csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $artists->name }}">
  </div>

  <div class="form-group">
    <label for="role">Role:</label>
    <select name="role">
    @foreach ($qry as $v)
      <option value="{{ $v->id }}">{{ $v->name }}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="comic">Comicbook:</label>
    <select name="comicbook">
    @foreach ($q as $y)
      <option value="{{ $y->id }}">{{ $y->name }}</option>
    @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
<hr>
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
</div>
@endsection