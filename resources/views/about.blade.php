@extends('layouts.app')

@section('title')
    <title>About Us</title>
@endsection

@section('content')
    <body>
        <!-- Page header with logo and tagline-->
        <header class="bg-light border-bottom mb-4">
            @include('layouts.header')
        </header>
        <!-- Page content-->
        <div class="container">
            <h1>Welcome to the about us page</h1>
        </div>
    </body>
@endsection