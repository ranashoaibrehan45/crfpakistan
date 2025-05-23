@extends('layouts.front')

@section('page-specific-css')
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet" />
@endsection

@section('content')
<hr>
<div class="container py-5">
    <div class="row">
        @foreach ($albums as $album)
        <div class="card" style="width:200px">
            <img class="card-img-top" src="{{ url('storage/album/thumbnails/' . $album->icon) }}" alt="Card image">
            <div class="card-body text-center">
                <h4 class="card-title">{{ $album->name }}</h4>
                <a href="{{ url('album/' . $album->slug) }}" class="btn btn-primary">See Album</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            {{ $albums->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection