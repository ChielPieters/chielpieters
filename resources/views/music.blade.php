@extends('layouts.master')
@section('title', 'Muziek')
@section('sidebar')
    @parent
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/face.png">
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h1>ZPNDZ - Hawk</h1>
                                    <p></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-text">
                        <div class="col-md-12 text-center">
                            <h1></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/pI1nhJgJ49c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gs5avEMKbG4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                    In deze video leg ik uit hoe een van mijn laatste tracks in elkaar zit.
                    Ik laat zien hoe mijn melodies zijn opgebouwd en alle componenten die ik heb gebruikt.
                </p>
            </div>
            <div class="col-md-6">
                <iframe src="https://open.spotify.com/embed/track/2iyYUbWj0XVeFYn0JamgUO" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://open.spotify.com/embed/track/2iyYUbWj0XVeFYn0JamgUO" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
        <div class="row" style="margin-top: 5%;">
            <div class="col-md-6">
                <h2>Laat hier een reactie achter!</h2>
                {!! Form::open(['route' => 'music']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Uw Naam') !!}
                    {!! Form::text('name', null, ['class' => 'form-control'], ['required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'Uw Bericht') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control'], ['required']) !!}
                </div>
                {!! Form::submit('Verzenden', ['class' => 'btn btn-info']) !!}

                {!! Form::close() !!}
            </div>
            <div class="col-md-6" style="margin-top: 49px;">
                @foreach($post as $key => $data)
                    <div class="text_border">
                        <tr>
                            <div class="text_post">
                                <h4>{{$data->name}}</h4>
                                {{$data->content}}
                                <div class="date">{{$data->created_at}}</div>
                            </div>
                        </tr>
                        </br>
                    </div>
                @endforeach
                <button onclick="PostFunction()">Try it</button>
                <p id="Show"></p>
            </div>
        </div>
    </div>
@stop
