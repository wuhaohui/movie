<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flat UI - Free Bootstrap Framework and Theme</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{ asset('static/dist/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{ asset("static/dist/css/flat-ui.css") }}" rel="stylesheet">
    <link href="{{ asset('static/docs/assets/css/demo.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('static/dist/js/vendor/html5shiv.js')}}"></script>
    <script src="{{ asset('static/dist/js/vendor/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
    @yield("content")

    @yield("main")

    <script src="{{ asset('static/dist/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('static/dist/js/flat-ui.min.js') }}"></script>
</body>
</html>
