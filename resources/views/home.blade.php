@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Owned Games</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($games as $game)
                        <a href="{{ url('games/'.$game->id) }}">{{ $game->name }}</a><br />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
