@extends('layouts.layout')

@section('content')
	<h3>Add new Series</h3>

<hr>
	<form method="post" action="/series">
		@csrf

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="desc">Description:</label>
    <textarea id="description" name="description" class="form-control" rows="6""></textarea>
  </div>

  <div class="form-group">
    <label for="comic">Comicbook:</label>
    <select name="comicbook">
    @foreach ($qry as $y)
      <option value="{{ $y->id }}">{{ $y->name }}</option>
    @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
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