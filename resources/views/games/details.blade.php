@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $game->name }}</div>

                    <div class="panel-body">
                        <h3>Genres</h3>
                        <ul>
                            @foreach($genres as $genre)
                                <li>{{ $genre->name }}</li>
                            @endforeach
                        </ul>
                        <a href="/addGenreToGame/{{ $game->id }}">Add a genre to {{ $game->name }}</a>
                    </div>
                    <div class="panel-body">
                        <h3>Reviews</h3>
                        @foreach($reviews as $review)
                            <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
