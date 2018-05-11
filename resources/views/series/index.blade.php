@extends('layouts.layout')

@section('content')
@include('flash::message')
<div class="container">
<a class="btn btn-outline-dark btn-block" href="/series/create" role="button">Add</a>
<hr>
</div>
@foreach ($query as $x)
<h1 class="display-3"> {{$x->title}} </h1>
<p style="font-size: 20px;"><small><span class="text-muted"><strong>Comicbook: </strong> {{$x->comicbooks->name}} </small> </span></p>
<div class="btn-group">
    <a class="btn btn-outline-dark" href="/series/{{$x->id}}" role="button">Detail</a>
    <a class="btn btn-outline-dark" href="/series/{{$x->id}}/edit" role="button">Edit</a>
  </div>
<hr class="featurette-divider">
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endforeach

@endsection
