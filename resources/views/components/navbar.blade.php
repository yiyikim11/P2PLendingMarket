<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bolder text-success" href="#">DIVA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex gap-4 ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                @if(Route::has('login'))
                <li class="nav-item">
                    <a class="btn btn-outline-success"
                        href="{{ url('/dashboard') }}">My Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                    <a class=" nav-link"
                        href="{{route('login')}}">Log in
                    </a>
                </li>

                @if(Route::has('register'))
                <li class="">
                    <a class=" btn btn-outline-success"
                        href="{{route('register')}}">Sign up
                    </a>
                </li>
                @endif
                @endauth




            </ul>
        </div>
    </div>
</nav>