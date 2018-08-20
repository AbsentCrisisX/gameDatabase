@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Write a review</h2>
                        {!! Form::open(
                            array(
                            'route' => 'reviews.store',
                            'class' => 'form'
                            )
                        ) !!}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                There were some problems adding the category.<br />
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('Review Title') !!}
                            {!! Form::text('title', null,
                              array(
                                'class'=>'form-control',
                                'placeholder'=>'The title of your review'
                              )) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Review') !!}
                            {!! Form::textarea('review', null,
                              array(
                                'class'=>'form-control',
                                'placeholder'=>'Your review'
                              )) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Your score (between 0 and 10)') !!}
                            {!! Form::selectRange('review_score', 1, 10) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('The reviewed game') !!}
                            {!!
                                Form::select('gameId', GameDatabase\Game::pluck('name', 'id'), null, ['class' => 'form-control'])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Save Genre!',
                              array('class'=>'btn btn-primary'
                            )) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection