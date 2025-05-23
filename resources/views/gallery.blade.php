@extends('layouts.front')

@section('page-specific-css')
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet" />
@endsection

@section('content')
<hr>
<div class="container py-5">
    <div class="row">
        @foreach ($album->images as $image)
            <div class="col-md-3 col-sm-4 col-6 mb-4">
                
                    <div class="card" style="width:200px">
                        <a href="{{ asset('storage/gallery/' . $image->path) }}"
                            data-lightbox="gallery"
                            title="{{ $image->title }}">
                            <img class="card-img-top"
                                    src="{{ url('storage/gallery/thumbnails/' . $image->path) }}"
                                    alt="{{ $image->title }}">
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $image->title }}</h4>
                        </div>
                    </div>
                
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('page-specific-js')
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
<script>
    console.log("Lightbox loaded");
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
</script>
@endsection