<!DOCTYPE html>
<html lang="{{  trans('app.opposite.lang.code')  }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{ url('css/'.trans('app.css')) }}" rel="stylesheet">
    <style>
        @yield('css')
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header {{ trans('app.header.nav.logo') }}">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ trans('app.sitename') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse {{ trans('app.header.nav.menu') }}">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">{{ trans('app.home') }}</a></li>
                <li><a href="{{ url('/about') }}">{{ trans('app.aboutme') }}</a></li>
                <li><a href="#contact">{{ trans('app.contactme') }}</a></li>
                <li><a href="{{ url('/local/'.trans('app.opposite.lang.code')) }}">{{ trans('app.opposite.lang') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fixed">
    @yield('content')
</div>

<script src="{{ url('js/app.js') }}"></script>
<script>
    @yield('js')
</script>
</body>
</html>