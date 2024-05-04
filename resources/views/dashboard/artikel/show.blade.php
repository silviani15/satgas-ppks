@extends('dashboard.layouts.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $artikel->title }}</h1>

                <a href="/dashboard/artikel" class="btn btn-success my-2"><i class="fa-solid fa-arrow-left"></i> Back to all
                    my artikel</a>
                <a href="/dashboard/artikel/{{ $artikel->slug }}/edit" class="btn btn-warning "><i
                        class="fa-regular fa-pen-to-square"></i> Edit</a>
                <form action="/dashboard/artikel{{ $artikel->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                            class="fa-solid fa-circle-xmark"></i> Delete</button>
                </form>

                @if ($artikel->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $artikel->category->name }}"
                        alt="{{ $artikel->category->name }}" class="img-fluid mt-3">
                @endif



                <article class="my-3 fs-5" style="text-align: justify;">
                    {!! $artikel->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
