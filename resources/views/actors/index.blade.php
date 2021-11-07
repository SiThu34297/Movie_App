@extends('layouts.main')

@section('content')
<div class="container">
    <h5 class="py-4" style="color: hsl(51, 97%, 35%)">POPULAR PEOPLE</h5>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
        @foreach ($popularActors as $actor)
        <div class="col mt-5">
            <a href="{{route('actors.show',$actor['id'])}}">
                <img src="{{$actor['profile_path']}}" alt="image" width="100%">
                <div class="text-box mt-3">
                    <a href="{{route('actors.show',$actor['id'])}}"
                        class="text-decoration-none text-white fs-5 text-bold">{{$actor['name']}}</a>
                    <p class="fs-6 text-white-50 text-truncate" style="font-size: 15px!important">
                        {{$actor['known_for']}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    {{-- end popular actors --}}
    <div class="d-flex align-items-center justify-content-between my-5">
        @if ($previous)
        <a href="/actors/page/{{$previous}}" class="text-decoration-none text-white">Previous</a>
        @else
        <div></div>
        @endif

        @if ($next)
        <a href="/actors/page/{{$next}}" class="text-decoration-none text-white">Next</a>
        @else
        <div></div>
        @endif
    </div>
</div>
@endsection
