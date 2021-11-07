<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <title>Movie App</title>
    @livewireStyles
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg  mb-5 navbar-dark py-4 border-bottom border-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('movies.index')}}">
                <i class="fas fa-video me-2"></i>
                MovieApp
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{route('movies.index')}}">Movie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('tv.index')}}">TV Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('actors.index')}}">Actors</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @livewire('search-dropdown')
                    <div class="ms-2">
                        <img src="{{asset('images/pp.png')}}" class="rounded-circle" alt="profile" width="40">
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}
    @yield('content')


    @livewireScripts
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>

{{-- model movie youtube script --}}
<script>
    let videoSrc;
    $('#modal-close').on('click', function(e) {
        e.preventDefault();
        videoSrc = $(this).data( "src" );
       $('.modal iframe').attr('src', '');
       $('.modal iframe').attr('src', videoSrc);
    });
</script>

{{-- model movie image script --}}
<script>
    let imgSrc;
    $('.viewImage').on('click', function(e) {
        imgSrc = e.target.src;
       $('.modal #modal-image').attr('src', imgSrc);
    });
</script>
