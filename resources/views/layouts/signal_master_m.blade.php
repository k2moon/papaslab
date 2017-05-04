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
                    <li class="tab"><a class="active" href="/signal">SIGNAL</a></li>
                    <li class="tab"><a class="active" href="{{ url('/signal/tsignal') }}">TSIGNAL CREATE</a></li>
                    <li class="tab"><a class="active" href="/">SINFO</a></li>
                    <li class="tab"><a class="active" href="/">BUY N SELL</a></li>
                </ul>
            </div>
            {{-- <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#signal_list">SIGNAL </a></li>
                    <li class="tab"><a href="{{ url('/signal/tsignal') }}">TSIGNAL CREATE</a></li>
                    <li class="tab"><a href="#sinfo_list">SINFO </a></li>
                    <li class="tab"><a href="#buynsell_create">BUY N SELL</a></li>
                </ul>
            </div> --}}
    </nav>

    <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  

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
