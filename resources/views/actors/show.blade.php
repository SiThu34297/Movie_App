@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{$actor['profile_path']}}" alt="profile" width="100%">
            <ul class="mt-4 list-unstyled d-flex align-items-center ">
                @if ($social['twitter'])
                <li>
                    <a href="{{$social['twitter']}}" title="Twitter" class="text-decoration-none text-white me-3">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                </li>
                @endif
                @if ($social['facebook'])
                <li>
                    <a href="{{$social['facebook']}}" title="Facebook" class="text-decoration-none text-white me-3">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                </li>
                @endif
                @if ($social['instagram'])
                <li>
                    <a href="{{$social['instagram']}}" title="Instagram" class="text-decoration-none text-white me-3">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </li>
                @endif
                @if ($actor['homepage'])
                <li>
                    <a href="{{$actor['homepage']}}" title="Website" class="text-decoration-none text-white me-3">
                        <i class="fas fa-globe-americas fa-lg"></i>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div class="col-md-8 text-white">
            <h2>{{$actor['name']}}</h2>
            <div class="text-white d-flex align-items-center mb-2">
                <span>
                    <i class="fas fa-birthday-cake"></i>
                </span>
                <span class="ms-2">{{$actor['birthday']}} ({{$actor['age']}} years old) in
                    {{$actor['place_of_birth']}}</span>
            </div>
            <p class="mt-4 text-justify">{{$actor['biography']}}</p>
            <h4 class="mt-5">Known For</h4>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                @foreach ($knownForMovies as $movie)
                <div class="col mt-5">
                    <a href="{{$movie['linkToPage']}}">
                        <img src="{{$movie['poster_path']}}" alt="poster" width="100%">
                    </a>
                    <div class="text-box mt-3">
                        <a href="{{$movie['linkToPage']}}" class="text-decoration-none text-white">
                            <span style="font-size: 15px">{{$movie['title']}}</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- end movie info --}}
    <div class="container py-5">
        <h2 class="text-white">Credits</h2>
        <div class="row">
            <ul class="text-white">
                @foreach ($credits as $credit)
                <li class="mt-3">{{$credit['release_year']}} &middot;
                    <strong>{{$credit['title']}}</strong> as
                    {{$credit['character']}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    {{-- end cast or actors --}}
</div>
@endsection
