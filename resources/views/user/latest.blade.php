<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">  
        @foreach($data as $new)     
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$new->title}}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="newimage/{{$new->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">{{$new->description}}</a></h5>
              <div class="site-info">
                <span class="mai-time"></span>{{$new->created_at}}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
    </div>
  </div>