@extends('layouts.app')

@section('title')
    <title>{{ $post->title }}</title>
@endsection

@section('content')
  <body class="bg-light">
    <!-- Page header with logo and tagline-->
    <header class="bg-light border-bottom mb-4">
        @include('layouts.header')
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">{{ $post->title }}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Author</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{ $post->created_at }}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src= {{ asset("storage/img/$post->image.jpg") }} alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead">{{ $post->content }}</p>

          <hr>

          <!-- Comments Form -->
          {{-- <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>--}}

        </div> 

        <!-- Sidebar Widgets Column -->
        <div class="col-lg-4">
          <!-- Search widget-->
          <div class="card mb-4">
              <div class="card-header">Search</div>
              <div class="card-body">
                  <div class="input-group">
                      <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                      <button class="btn btn-primary mt-2 confirm-button" id="button-search" type="button">Go!</button>
                  </div>
              </div>
          </div>
          <!-- Categories widget-->
          <div class="card mb-4">
              <div class="card-header">Categories</div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                          <ul class="list-unstyled mb-0">
                              <li><a href="#!">Web Design</a></li>
                              <li><a href="#!">HTML</a></li>
                              <li><a href="#!">Freebies</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-6">
                          <ul class="list-unstyled mb-0">
                              <li><a href="#!">JavaScript</a></li>
                              <li><a href="#!">CSS</a></li>
                              <li><a href="#!">Tutorials</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Side widget-->
          <div class="card mb-4">
              <div class="card-header">Side Widget</div>
              <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
          </div>
      </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  </body>

@endsection
