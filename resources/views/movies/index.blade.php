@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Elenco dei film:</h1>
                <p>
                    @dump($movies)
                </p>
            </div>
        </div>
    </div>
@endsection