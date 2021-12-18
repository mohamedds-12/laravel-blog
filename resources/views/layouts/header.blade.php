    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('posts') ? 'active' : '' }}" href="{{ route('posts.index') }}">Posts</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('posts/create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Add</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('posts/trash') ? 'active' : '' }}" href="{{ route('posts.trash') }}">Trashed Posts</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin/register') ? 'active' : '' }}" href="{{ route('admin.register') }}">Register</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" aria-current="page" href="/admin/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/admin/register">Register</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    
