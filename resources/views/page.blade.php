@extends('layouts.front')

@section('page-specific-css')
<style>
.content-with-images img {
    max-width: 45%;
    height: auto;
    margin: 10px;
}

/* Odd-indexed images float right, even-indexed float left */
.content-with-images img:nth-of-type(odd) {
    float: right;
    margin-left: 20px;
}

.content-with-images img:nth-of-type(even) {
    float: left;
    margin-right: 20px;
}

/* Ensure text wraps around images */
.content-with-images::after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive behavior */
@media (max-width: 768px) {
    .content-with-images img {
        float: none;
        display: block;
        margin: 0 auto 20px;
        max-width: 100%;
    }
}

</style>
@endsection

@section('content')
    <div class="container content-with-images">
        <h1>{{ $page->title }}</h1>

        {!! $page->content !!}
    </div>
@endsection

@section('page-specific-js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.content-with-images img');
        images.forEach((img, index) => {
            img.style.float = index % 2 === 0 ? 'right' : 'left';
            img.style.margin = index % 2 === 0 ? '0 0 1em 1em' : '0 1em 1em 0';
            img.style.maxWidth = '45%';
            img.style.height = 'auto';
        });
    });
</script>
@endsection