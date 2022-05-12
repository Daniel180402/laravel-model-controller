@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ps-4">
                <h1>List of movies:</h1>
            </div>
            @foreach ($movies as $movie)
            <div class="col-4">
                <div class="card p-3 m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Release date: {{ $movie->date }}</h6>
                        <p class="card-text">Original title: {{ $movie->original_title }}</p>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text">Vote: {{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection