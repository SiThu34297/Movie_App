<div class="col mt-5">
    <div>
        <a href="{{route('movies.show',$movie['id'])}}">
            <img class="text-center" src="{{ $movie['poster_path'] }}" alt="poster" width="100%">
        </a>
    </div>
    <div class="text-box mt-3">
        <a href="{{route('movies.show',$movie['id'])}}" class="text-decoration-none text-white">
            {{$movie['title']}}
        </a>
        <div class="text-white d-flex align-items-center mt-2">
            <span>
                <i class="fas fa-star text-warning"></i>
            </span>
            <span class="ms-2">{{ $movie['vote_average'] }}</span>
            <span class="ms-1">|</span>
            <span class="ms-2">{{ $movie['release_date'] }}</span>
        </div>
        <div class="text-white mt-2">
            <span>
                {{$movie['genres']}}
            </span>
        </div>
    </div>
</div>
