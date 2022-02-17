@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($movies as $movie)
            <div class="col p-2">
                
                <div class="my_card d-flex flex-column p-2">
                    <h2 class="text-center title">{{ $movie->title }}</h2>
                    <span>Original title: {{ $movie->original_title }}</span>
                    <span>Language: {{ $movie->nationality }}</span>
                    <span>Date: {{ $movie->date }}</span>
                    <span>Vote: {{ $movie->vote }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection