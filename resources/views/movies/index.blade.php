@extends('layouts.main')

@section('content')
<div class="container">
    <h5 class="py-4" style="color: hsl(51, 97%, 35%)">POPULAR MOVIES</h5>
    <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
        @foreach ($popularMovies as $movie)
        <x-movie-card :movie="$movie" />
        @endforeach
    </div>
</div>
{{-- end popular movies --}}

<div class="container mt-5">
    <h5 class="py-4" style="color: hsl(51, 97%, 35%)">NOW PLAYING</h5>
    <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
        @foreach ($nowPlayingMovies as $movie)
        <x-movie-card :movie="$movie" />
        @endforeach
    </div>
</div>
@endsection
