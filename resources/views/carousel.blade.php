@section('carousel')
<!-- Carousel container -->
<div id="my-pics" class="carousel slide" data-ride="carousel" style="width:300px;margin:auto;">

<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#my-pics" data-slide-to="0" class="active"></li>
<li data-target="#my-pics" data-slide-to="1"></li>
<li data-target="#my-pics" data-slide-to="2"></li>
</ol>

<!-- Content -->
<div class="carousel-inner" role="listbox">

<!-- Slide 1 -->
<div class="item active">
<img src="/pix/samples/16l.jpg" alt="Sunset over beach">
<div class="carousel-caption">
<h3>Boracay</h3>
<p>White Sand Beach.</p>
</div>
</div>

<!-- Slide 2 -->
<div class="item">
<img src="/pix/samples/4l.jpg" alt="Rob Roy Glacier">
<div class="carousel-caption">
<h3>Rob Roy Glacier</h3>
<p>You can almost touch it!</p>
</div>
</div>

<!-- Slide 3 -->
<div class="item">
<img src="/pix/samples/15l.jpg" alt="Longtail boats at Phi Phi">
<div class="carousel-caption">
<h3>Phi Phi</h3>
<p>Longtail boats at Phi Phi.</p>
</div>
</div>

</div>

<!-- Previous/Next controls -->
<a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
<span class="icon-prev" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
<span class="icon-next" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

</div>
@endsection