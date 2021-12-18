@extends('layouts.app')

@section('title')
    <title>Edit post</title>
@endsection

@section('content')
    <body class="bg-light">
        <!-- Page header with logo and tagline-->
        <header class="bg-light border-bottom mb-4">
            @include('layouts.header')
        </header>
        <div class="container mt-5 mb-5 col-sm-6 justify-content-center">
            <div class="card px-1 py-4">
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea type="text" name="content" class="form-control" id="content" cols="30" rows="10" id="content">{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" name="image" class="form-control" id="image" value="{{ $post->image }}">
                    </div>
                    <button type="submit" class="mt-4 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </body>
@endsection