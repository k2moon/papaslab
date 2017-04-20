<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sinfos</title>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <nav class="nav-extended">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">Signals</a>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">HOME</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li class="tab"><a class="active" href="/">HOME</a></li>
                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#signal_list">SIGNAL </a></li>
                    <li class="tab"><a href="#tsignal_create">TSIGNAL CREATE</a></li>
                    <li class="tab"><a href="#sinfo_list">SINFO </a></li>
                    <li class="tab"><a href="#sinfo_create">SINFO CREATE</a></li>
                    <li class="tab"><a href="#buynsell_create">BUY N SELL</a></li>
                </ul>
            </div>
    </nav>

    <div class="container">

    @yield('content')
   
   </div>
    <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script src="js/init.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
