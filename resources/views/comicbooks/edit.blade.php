@extends('layouts.layout')

@section('content')
	<h3>Edit {{$comicbooks->name}} Information</h3>

<hr>
	<form method="post" action="{{action('ComicbookController@update', $comicbook)}}">
		{{ method_field('PATCH') }}

		@csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $comicbooks->name }}">
  </div>

  <div class="form-group">
    <label for="issue_no">Issue Number:</label>
    <input type="number" class="form-control" id="issue_no" name="issue_no" value="{{ $comicbooks->issue_no }}">
  </div>

  <div class="form-group">
    <label for="desc">Description:</label>
    <textarea id="description" name="description" class="form-control" rows="10"">{{ $comicbooks->description }}</textarea>
  </div>

  <div class="form-group">
    <label for="avg_rating">Average Rating:</label>
    <input type="number" class="form-control" id="avg_rating" name="avg_rating" step="0.01" value="{{ $comicbooks->avg_rating }}">
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