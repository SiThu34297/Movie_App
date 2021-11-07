<div class="col mt-5">
    <div>
        <a href="{{route('tv.show',$tvshow['id'])}}">
            <img class="text-center" src="{{ $tvshow['poster_path'] }}" alt="poster" width="100%">
        </a>
    </div>
    <div class="text-box mt-3">
        <a href="{{route('tv.show',$tvshow['id'])}}" class="text-decoration-none text-white">
            {{$tvshow['name']}}
        </a>
        <div class="text-white d-flex align-items-center mt-2">
            <span>
                <i class="fas fa-star text-warning"></i>
            </span>
            <span class="ms-2">{{ $tvshow['vote_average'] }}</span>
            <span class="ms-1">|</span>
            <span class="ms-2">{{ $tvshow['first_air_date'] }}</span>
        </div>
        <div class="text-white mt-2">
            <span>
                {{$tvshow['genres']}}
            </span>
        </div>
    </div>
</div>
