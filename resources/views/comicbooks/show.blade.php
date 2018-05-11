@extends('layouts.layout')

@section('content')

<h1 class="display-3"> {{$comicbooks->name}} </h1>
<p style="font-size: 20px;"><small><span class="text-muted">Published on: {{ $comicbooks->created_at->toFormattedDateString() }}</small> </span></p>
        		
            </h2>
            <p class="lead">
            	
        			{{$comicbooks->description}}
        		
            </p>
<p>Rating: {{$comicbooks->avg_rating}}</p>
@if (count($artists))
<hr>
<h2 style="color: orange;">Artists: </h2>
<ul>
@foreach ($artists as $q)
<li><p> {{$q->name}} </p></li>
@endforeach
</ul>
@endif

@if (count($series))
<hr>
<h2 style="color: orange;">Series: </h2>
<ul>
@foreach ($series as $l)
<li><p> {{$l->title}} </p></li>
@endforeach
</ul>
@endif

@endsection