@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <p>
                                The genre has been added succesfully. You will be redirected to the Game list shortly.
                                If this doesn't work, <a href="{{ route('home') }}">click here</a>.
                            </p>
                        </div>
                        <script>setTimeout(function(){window.location.href='{{ route('home') }}'},3000);</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection