@extends('layouts.app')

@section('title')
    <title>Trashed posts</title>
@endsection

@section('content')
    <body class="bg-light">
        <!-- Page header with logo and tagline-->
        <header class="bg-light border-bottom mb-4">
            @include('layouts.header')
        </header>
        <div class="container">

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        {{-- <th>Author</th> --}}
                        <th>Title</th>
                        {{-- <th>Category</th> --}}
                        <th>Content</th>
                        <th>Image</th>
                        {{-- <th>Comments</th> --}}
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td style="width: 50%">{{ $post->content }}</td>
                            <td><img class="custom-viewPost-img rounded" src="{{ asset("storage/img/$post->image.jpg") }}" ></td>
                            <td >{{ $post->deleted_at }}</td>
                            
                            <td><a href="{{ route('posts.restore', $post->id) }}"><input type="button" class="btn btn-outline-success btn-sm" value="Restore"></a></td>
                            {{-- <td><a href='view_posts.php?delete_id=<?php //echo $post_id ?>'><input type="button" class="btn btn-outline-danger btn-sm" value="Delete"></a></td> --}} 

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection