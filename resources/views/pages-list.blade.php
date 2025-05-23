@extends('layouts.front')

@section('content')
<div class="single-page pt-5">
    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                @forelse ($pages as $page)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $page->title }}</h5>
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($page->content), 150) }}
                                </p>
                                <a href="{{ route('category.page', ['categorySlug' => $page->category->slug, 'pageSlug' => $page->slug]) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No pages found under this subcategory.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>        
</div>
@endsection
