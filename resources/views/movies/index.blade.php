@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Elenco dei film:</h1>
                {{ $name }}
            </div>
        </div>
    </div>
@endsection