@extends('layout.main')
<style>
    .navbar {
        padding-right: 13% !important;
    }
    .hide {
        display: none !important;
    }
</style>

<section>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li class="activess" aria-current="page">Artikel</li>
        </ul>
    </nav>
</section>

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/artikel">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($artikel->count())
        <div class="card mb-3">
            @if ($artikel[0]->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $artikel[0]->image) }}" alt="{{ $artikel[0]->category->name }}"
                        class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $artikel[0]->category->name }}" class="card-img-top"
                    alt="{{ $artikel[0]->category->name }}">
            @endif


            <div class="card-body text-center">
                <h3 class="card-title"><a href="/artikel/{{ $artikel[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $artikel[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a
                            href="/authors/{{ $artikel[0]->author->username }}" class="text-decoration-none">{{ $artikel[0]->author->name }}</a>
                        in <a href="/categories/{{ $artikel[0]->category->slug }}"
                            class="text-decoration-none">{{ $artikel[0]->category->name }}</a>
                        {{ $artikel[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $artikel[0]->excerpt }}</p>

                <a href="/artikel/{{ $artikel[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($artikel->skip(1) as $artikel)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a
                                    href="/category/{{ $artikel->category->slug }}"
                                    class="text-white text-decoration-none">{{ $artikel->category->name }}</a></div>

                            @if ($artikel->image)
                                <img src="{{ asset('storage/' . $artikel->image) }}"
                                    alt="{{ $artikel->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $artikel->category->name }}"
                                    class="card-img-top" alt="{{ $artikel->category->name }}">
                            @endif


                            <div class="card-body">
                                <h5 class="card-title">{{ $artikel->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a
                                            href="/authors/{{ $artikel->author->username }}" class="text-decoration-none">{{ $artikel->author->name }}</a>
                                        {{ $artikel->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $artikel->excerpt }}</p>
                                <a href="/artikel/{{ $artikel->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    {{-- <div class="d-flex justify-content-end">
        {{ $artikel->links() }}
    </div> --}}

    @include('main.footer')
@endsection
