@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Add a Genre</h2>
                        {!! Form::open(
                            array(
                            'route' => 'genre.store',
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
                            {!! Form::label('Genre name') !!}
                            {!! Form::text('name', null,
                              array(
                                'class'=>'form-control',
                                'placeholder'=>'Name of the genre'
                              )) !!}
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