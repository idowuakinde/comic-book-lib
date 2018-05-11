@extends('layouts.layout')
@section('content')
<div class="container">
<a class="btn btn-outline-dark btn-block" href="/comicbooks/create" role="button">Add</a>
<hr>
</div>
@include('flash::message')

@foreach ($comicbooks as $comicbook)
		@include ('comicbooks.post')
@endforeach

@endsection