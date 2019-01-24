<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <title>Chiel Pieters - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="author" content="CodePixar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">

    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" rel="stylesheet" type="text/css">

    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel='stylesheet' href="css/simplelightbox.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js">
    <!--
    JAVASCRIPT
    ============================================= -->
    <script src="/js/script.js"></script>
</head>
<body>
@section('sidebar')
    <header class="pt-25 pb-25 p1-gradient-bg header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="header-wrap">
                        <div class="header-top d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="/"><img src="img/logo.png" class="logo_mq" alt="Logo"></a>
                            </div>
                            <div class="topnav" id="myTopnav">
                                <a href="/" class="active">Home</a>
                                <a href="/muziek">Muziek</a>
                                <a href="/photoshop">Photoshop</a>
                                <a href="/unrealengine">Unreal Engine</a>
                                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            {{--<div class="main-menubar d-flex align-items-center">--}}
                                {{--<nav class="">--}}
                                    {{--<i class="fas fa-home" style="margin-right: -3%;"></i><a href="/">Home</a>--}}
                                    {{--<i class="fas fa-music" style="margin-right: -3%;"></i><a href="/muziek">Muziek</a>--}}
                                    {{--<i class="fas fa-paint-brush" style="margin-right: -3%;"></i><a href="/photoshop">Photoshop</a>--}}
                                {{--</nav>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@show

<div>
    @yield('content')
</div>
@include('layouts.footer')

</body>
</html>
