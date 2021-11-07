<form class="d-flex">
    <i id="m-search-icon" class="fas fa-search text-white"></i>
    <input wire:model.debounce.500="search" id="m-search" class="form-control" type="search movie" placeholder="Search"
        autocomplete="off">
    @if ($search)
    <div class="position-absolute top-100 start-75">
        @if ($searchResults->count() > 0)
        <ul class="p-0" style="list-style: none">
            @foreach ($searchResults as $result)
            <li>
                <a href="{{route('movies.show',$result['id'])}}" class="text-decoration-none">
                    <div class="card rounded-0 bg-dark text-white" id="search-box-card">
                        <div class="card-body">
                            @if ($result['poster_path'])
                            <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="image" width="30"
                                class="me-2">
                            @else
                            <img src="https://via.placeholder.com/50x75" alt="image" width="30" class="me-2">
                            @endif
                            {{$result['title']}}
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <ul class="p-0" style="list-style: none">
            <li>
                <a href="#" class="text-decoration-none">
                    <div class="card rounded-0 bg-dark text-white" id="search-box-card">
                        <div class="card-body">
                            No result for this {{$search}}
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        @endif
    </div>
    @endif
</form>
