@extends('layouts.app')


@section('title')
    <title>Create a post</title>
@endsection

@section('content')
    <body class="bg-light">
        <!-- Page header with logo and tagline-->
        <header class="bg-light border-bottom mb-4">
            @include('layouts.header')
        </header>
        <div class="container mt-5 mb-5 col-6 justify-content-center">
            <div class="card px-1 py-4">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea type="text" name="content" class="form-control" id="content" placeholder="Enter Content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Image">
                    </div>
                    <button type="submit" class="mt-4 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </body>
@endsection