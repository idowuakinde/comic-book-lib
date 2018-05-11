@extends('layouts.layout')

@section('content')
	<h3>Edit {{$query->title}} Information</h3>

<hr>
	<form method="post" action="{{action('SeriesController@update', $series)}}">
		{{ method_field('PATCH') }}

		@csrf

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $query->title }}">
  </div>

  <div class="form-group">
    <label for="desc">Description:</label>
    <textarea id="description" name="description" class="form-control" rows="10"">{{ $query->description }}</textarea>
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