@extends('layouts.master')
@section('title', 'Photoshop')
@section('sidebar')
    @parent
@stop

@section('content')
            <section class="gallery-area section-gap slider_placement" id="gallery">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8 pb-30 header-text">
                            <h1 class="text-white">Mijn recente edits</h1>
                            <p>
                               Dit zijn een van mijn laatste Photoshop edits voor onderandere Track Artworks op Spotify
                            </p>
                        </div>
                    </div>
                    <div class="gal">
                        @foreach($image as $key => $data)
                            <div class="PSImages">
                                <a class="f-img img-fluid mx-auto" href="img/{{$data->title}}"><img src="img/{{$data->title}}" alt="HawkArtwork" target="_blank"></a>
                                <div class="overlay">
                                    <h3 class="text">{{$data->name}}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="container">
                        <div class="row">
                            {!! Form::open(['route' => 'photoshop']) !!}

                            <div class="form-group">
                                {!! Form::label('name', 'Naam') !!}
                                {!! Form::text('name', null, ['class' => '']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('title', 'Titel') !!}
                                {!! Form::file('title', ['class' => '']) !!}
                            </div>
                            {!! Form::submit('Verzenden', ['class' => 'btn btn-info']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
        </section>
    @stop


