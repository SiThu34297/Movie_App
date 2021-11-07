@extends('layouts.main')

@section('content')
<div class="container border-bottom py-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $tvshow['poster_path'] }}" alt="img" class="img-fluid mx-auto d-block" id="s-movie-image">
        </div>
        <div class="col-md-8 text-white">
            <h2>{{$tvshow['name']}}</h2>
            <div class="text-white d-flex align-items-center mb-2">
                <span>
                    <i class="fas fa-star text-warning"></i>
                </span>
                <span class="ms-2">{{$tvshow['vote_average']}}</span>
                <span class="ms-1">|</span>
                <span class="ms-2">{{$tvshow['first_air_date']}}</span>
                <span class="ms-1">|</span>
                <span class="ms-2">
                    {{$tvshow['genres']}}
                </span>
            </div>
            <p class="mt-4 text-justify">{{$tvshow['overview']}}</p>
            <div class="mt-4">
                <h4>Feature Cast</h4>
            </div>
            <div class="d-flex mt-4">
                @foreach ($tvshow['created_by'] as $crew)
                <div class="me-5">
                    <h5>{{$crew['name']}}</h5>
                    <span>Creator</span>
                </div>
                @endforeach
            </div>
            <div class="mt-4">
                @if (count($tvshow['videos']['results']) > 0)
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="far fa-play-circle me-2"></i>
                    Play Trailer</button>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- end movie info --}}
<div class="container border-bottom py-5">
    <h2 class="text-white mb-5">Cast</h2>
    <div class="row row-cols-1  row-cols-md-3 row-cols-lg-5">
        @foreach ($tvshow['cast'] as $cast)
        <div class="col">
            <div>
                <a href="{{route('actors.show',$cast['id'])}}">
                    @if ($cast['profile_path'])
                    <img class="text-center mt-3" src="{{'https://image.tmdb.org/t/p/w200/'.$cast['profile_path']}}"
                        alt="img" width="100%">
                    @else
                    <img class="text-center mt-3" src="https://via.placeholder.com/204X306/000/FFF/?text=ImageNotFound"
                        alt="img" width="100%">
                    @endif
                </a>
            </div>
            <div class="text-box mt-3">
                <a href="{{route('actors.show',$cast['id'])}}" class="text-decoration-none">
                    <h5 class="text-white">{{$cast['name']}}</h5>
                </a>
                <div class="text-white">
                    {{$cast['character']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- end cast or actors --}}

{{-- movie images --}}
<div class="container py-5">
    <div class="row">
        <div class="row row-cols-1 row-cols-lg-3 g-3">
            @foreach ($tvshow['images'] as $image)
            <div class="col">
                <a href="" class="viewImage" data-bs-toggle="modal" data-bs-target="#movieImage">
                    <img src="{{'https://image.tmdb.org/t/p/original/'.$image['file_path']}}" alt="images" width="100%"
                        id="posterImage">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Movie modal --}}
@if ($tvshow['videos']['results'])
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: #0b0b16;">
            <div class="modal-header border-bottom-0">
                <button type="button" id="modal-close"
                    data-src="https://youtube.com/embed/{{ $tvshow['videos']['results'][0]['key'] }}"
                    class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="position-relative" style="padding-bottom: 56.25%;heigth=0;">
                    <iframe width="560" height="349" id="video"
                        src="https://youtube.com/embed/{{ $tvshow['videos']['results'][0]['key'] }}"
                        class="position-absolute top-0 start-0 w-100 h-100" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

{{-- Movie image modal --}}
<div class="modal fade" id="movieImage">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: #0b0b16;">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" alt="images" width="100%" id="modal-image">
            </div>
        </div>
    </div>
</div>
@endsection
