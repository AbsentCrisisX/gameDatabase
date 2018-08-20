@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $review->title }} by {{ $user }} | Game: <a href="{{ url('/games/'.$review->game_id) }}">{{ $game->name }}</a></div>

                    <div class="panel-body">
                        {{ $review->review }}
                    </div>
                    <div class="panel-body">
                        <h3>Score</h3>
                        {{ $review->review_score }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
