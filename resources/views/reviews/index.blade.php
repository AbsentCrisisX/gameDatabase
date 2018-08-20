@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All reviews</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($reviews as $review)
                            <a href="{{ url('reviews/'.$review->id) }}">{{ $review->title }}</a><br />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
