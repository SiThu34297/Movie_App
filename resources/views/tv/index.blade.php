@extends('layouts.main')

@section('content')
<div class="container">
    <h5 class="py-4" style="color: hsl(51, 97%, 35%)">POPULAR TV SHOWS</h5>
    <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
        @foreach ($popularTv as $tvshow)
        <x-tv-card :tvshow="$tvshow" />
        @endforeach
    </div>
</div>
{{-- end popular movies --}}

<div class="container mt-5">
    <h5 class="py-4" style="color: hsl(51, 97%, 35%)">TOP RATED TV SHOWS</h5>
    <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
        @foreach ($topRatedTv as $tvshow)
        <x-tv-card :tvshow="$tvshow" />
        @endforeach
    </div>
</div>
@endsection
