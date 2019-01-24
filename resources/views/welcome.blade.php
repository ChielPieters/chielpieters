@extends('layouts.master')
@section('title', 'Home')
@section('sidebar')
    @parent


@stop

@section('content')
    <!--Image-->
    <div class="container-fluid" style="overflow-x: hidden;">
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
                            <h1>Gerecht van de dag: Kippensoep!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Music Bar-->
        <div class="row">
            <section class="callto-area pt-50 pb-50 p1-gradient-bg info_bar">
                <div class="col-lg-9 callto-left info_text">
                    <h1 class="text-uppercase spotify_bar">Benieuwd naar mijn muziek?</h1>
                </div>
                <div class="col-lg-9 callto-right">
                    <a href="https://open.spotify.com/artist/57mHVqoakmWlQWZQZ0LcOp?si=M-Po6xkfRZ25Dzz4wIXIpA" target="_blank" class="btn-white btn text-uppercase">Luister nu!</a>
                </div>
            </section>
        </div>
    </div>
    <!--Info Box-->
    <div class="container">
        <section class="blog-area section-gap" id="blog">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12 pb-30 header-text">
                        <h1>Mijn recente posts</h1>
                        <p>
                            Lees hier informatie over mij en m'n bezigheden.
                        </p>
                    </div>
                </div>
                <div class="row content">
                    <div class="single-blog col-lg-4 col-md-6">
                        <a href="/muziek">
                            <img class="f-img img-fluid mx-auto" src="img/music.png" alt="music">
                            <h4>
                                <a href="/muziek">Muziek Creaties</a>
                            </h4>
                            <p>
                                Als hobby sleutel ik graag mijn eigen tracks in elkaar in FLStudio 12. Ik heb er al een aantal gemaakt zoals
                                <b>"Hawk" (2017)</b>, <b>"Inner Voices" (2018)</b> & <b>"Now or Never" (2018)</b>.
                                Ik leg op deze pagina uit hoe ik een van mijn nummers heb gemaakt. Als je het leuk vind kan je daar ook een reactie achter laten.
                            </p>
                        </a>
                    </div>
                    <div class="single-blog col-lg-4 col-md-6">
                        <a href="/photoshop">
                            <img class="f-img img-fluid mx-auto" src="img/photoshop.png" alt="photoshop">
                            <h4>
                                <a href="/photoshop">Photoshop Edits</a>
                            </h4>
                            <p>
                                Ik heb een aantal jaar YouTube filmpjes gemaakt en bij elk filmpje hoort natuurlijk een tumbnail. Zo doende heb ik mijzelf Photoshop geleerd.
                                Met die kennis heb ik ook voor mijn tracks Spotify Artworks gemaakt. Je kan ze hier bekijken!
                            </p>
                        </a>
                    </div>
                    <div class="single-blog col-lg-4 col-md-6">
                        <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
                        <h4>
                            <a href="#">Summer ware are coming</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop

