@extends('layouts.layout')

@section('content')
<div class="container">
@if ($search == '')
	
	<p>Search keyword cannot be empty!</p>
	

@else
	
	@if (count($artists) != 0)
		@foreach ($artists as $a)
		<p>{{$a->name}}</p>
		@endforeach
	@elseif (count($comics) != 0)
	<ul>
		@foreach ($comics as $c)	
		<li><a href="/comicbooks/{{$c->id}}">{{ $c->name }}</a></li>
		@endforeach
	</ul>
	@else
		<p>Search keyword could not be found!</p>
	@endif
	
@endif
</div>
@endsection