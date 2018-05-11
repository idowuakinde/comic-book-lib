@extends('layouts.layout')

@section('content')
<div class="container">
<a class="btn btn-outline-dark btn-block" href="/artists/create" role="button">Add</a>
<hr>
</div>
@include('flash::message')
@foreach ($artists as $x)
<h1 class="display-3"> {{$x->name}} </h1>
<p><strong>Comicbook: </strong>{{$x->comicbooks->name}}</p>
<p style="font-size: 30px;"><small><span class="text-muted"><strong>Role: </strong> {{$x->roles->name}} </small> </span></p>
<div class="btn-group">
    <a class="btn btn-outline-dark" href="/artists/{{$x->id}}/edit" role="button">Edit</a>
  </div>
<hr class="featurette-divider">

<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endforeach

@endsection
