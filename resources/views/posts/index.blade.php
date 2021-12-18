@extends('layouts.app')


@section('title')
    <title>Posts</title>
@endsection

@section('content')
    <body class="bg-light">
        <!-- Page header with logo and tagline-->
        <header class="bg-light border-bottom mb-4">
            @include('layouts.header')
        </header>
        <div class="row justify-content-center">
            <!-- Blog entries-->
            <div class="col-lg-8 ">
                @if ($message = Session::get('updated'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @elseif ($message = Session::get('restored'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @elseif ($message = Session::get('deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @elseif ($message = Session::get('created'))
                    <div class="alert alert-info" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <!-- Blog posts-->
                @foreach ($posts as $post)
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset($post->image) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $post->created_at }}</div>
                            <h2 class="card-title h4">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->content }}</p>
                            <a class="btn btn-primary" href={{ route('posts.show', $post->id) }}>Read more →</a>
                            <a class="btn btn-secondary btn-sm float-end " href="{{ route('posts.edit', $post->id) }}">Edit &rarr; </a>
                            <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm float-end" >Delete &rarr; </button>

                            </form>
                        </div>
                    </div>
                @endforeach
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        {{ $posts->Links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </body>
@endsection