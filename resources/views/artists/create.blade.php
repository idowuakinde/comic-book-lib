@extends('layouts.layout')

@section('content')
	<h3>Add new Artist</h3>

<hr>
	<form method="post" action="/artists">
		@csrf

  <div class="form-group">
    <label for="title">Name:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="comic">Comicbook:</label>
    <select name="comicbook">
    @foreach ($qry as $y)
      <option value="{{ $y->id }}">{{ $y->name }}</option>
    @endforeach
    </select>
  </div

  <div class="form-group">
    <label for="role">Role:</label>
    <select name="role">
    @foreach ($qr as $z)
      <option value="{{ $z->id }}">{{ $z->name }}</option>
    @endforeach
    </select>
  </div>
  <div class="container">
  <button type="submit" class="btn btn-primary">Add</button>
  </div>
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