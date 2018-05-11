<div class="container">
  <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
        <a> 
        	{{$comicbook->name}}
        </a>
        			#{{$comicbook->issue_no}}

              
          </div>
          <div class="container">
  <div class="btn-group">
    <a class="btn btn-outline-dark" href="/comicbooks/{{$comicbook->id}}" role="button">Detail</a>
    <a class="btn btn-outline-dark" href="/comicbooks/{{$comicbook->id}}/edit" role="button">Edit</a>
    
  </div>
</div>
        </div>        
        <hr class="featurette-divider">
</div>
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>