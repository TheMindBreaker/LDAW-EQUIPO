<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>En Construcción</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">


    <link href="{{asset('/css/intro/bootstrap.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('/css/intro/jquery.classycountdown.css')}}" />

    <link href="{{asset('/css/intro/styles.css')}}" rel="stylesheet">

    <link href="{{asset('/css/intro/responsive.css')}}" rel="stylesheet">

</head>
<body>

<div class="main-area-wrapper">
    <div class="main-area center-text" style="background-image:url({{asset('/images/background.jpg')}});" >

        <div class="display-table">
            <div class="display-table-cell">

                <h1 class="title"><b>En construcción</b></h1>
                <p class="desc font-white">Estamos programando lo mas rapido posible, para llevar te una experiencia inolvidable.</p>

                <div id="normal-countdown" data-date="2020/12/12"></div>

                <a class="btn btn-lg btn-primary" href="{{url('/fer')}}"><b>Fernando</b></a>
                <a class="btn btn-lg btn-info" href="{{url('/memo')}}"><b>Guillermo</b></a>
                <a class="btn btn-lg btn-warning" href="{{url('/juan')}}"><b>Juan Manuel</b></a>


            </div><!-- display-table -->
        </div><!-- display-table-cell -->
    </div><!-- main-area -->
</div><!-- main-area-wrapper -->

<!-- SCIPTS -->

<script src="{{asset('/js/intro/jquery-3.1.1.min.js')}}"></script>

<script src="{{asset('/js/intro/jquery.countdown.min.js')}}"></script>

<script src="{{asset('/js/intro/scripts.js')}}"></script>

</body>
</html>
