@extends('layouts.layout')


@section('content')
<main role="main">

 

      <div id="myCarousel" class="carousel slide container" data-ride="carousel">

<!-- Indicators -->

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
          
<!-- Wrapper for slides -->

          <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1> {{$comicbooks[0]->name}} </h1>
                <br/>
                <p> {{$comicbooks[0]->description}} </p>
                <p><a class="btn btn-lg btn-primary" href="/comicbooks/1" role="button">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1> {{$comicbooks[1]->name}} </h1>
                <br/>
                <p> {{$comicbooks[1]->description}} </p>
                <p><a class="btn btn-lg btn-primary" href="/comicbooks/2" role="button">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1> {{$comicbooks[2]->name}} </h1>
                <br/>
                <p> {{$comicbooks[2]->description}} </p>
                <p><a class="btn btn-lg btn-primary" href="/comicbooks/3" role="button">Read more</a></p>
              </div>
            </div>
          </div>
        </div>

<!-- Controls -->

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
 
<hr>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2> {{$artists[0]->name}} </h2>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2> {{$artists[1]->name}} </h2>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>H {{$artists[2]->name}} </h2>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"> {{$comicbooks[0]->name}}: <span class="text-muted"> {{$series[0]->title}} </span></h2>
            <p class="lead"> {{$series[0]->description}} </p>
          </div>
          <div class="col-md-5">
            
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"> {{$comicbooks[0]->name}}: <span class="text-muted"> {{$series[1]->title}} </span></h2>
            <p class="lead"> {{$series[1]->description}} </p>
          </div>
          <div class="col-md-5 order-md-1">
            
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"> {{$comicbooks[1]->name}}: <span class="text-muted"> {{$series[2]->title}} </span></h2>
            <p class="lead"> {{$series[2]->description}} </p>
          </div>
          <div class="col-md-5">
            
          </div>
        </div>
@endsection
