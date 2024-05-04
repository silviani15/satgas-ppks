@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />

<section>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/artikel">Artikel</a></li>
            <li class="activess" aria-current="page">Detail Artikel</li>
        </ul>
    </nav>
</section>

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $artikel->title }}</h1>

                <p>By. <a
                        href="/artikel?author={{ $artikel->author->username }}"class="text-decoration-none">{{ $artikel->author->name }}</a>
                    in <a href="/artikel?category={{ $artikel->category->slug }}"
                        class="text-decoration-none">{{ $artikel->category->name }}</a></p>

                @if ($artikel->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $artikel->category->name }}"
                        alt="{{ $artikel->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5" style="text-align: justify;">
                    {!! $artikel->body !!}
                </article>


                <a href="/artikel" class="d-block mt-3 text-decoration-none">Back to Artikel</a>
            </div>
        </div>
    </div>
@endsection
