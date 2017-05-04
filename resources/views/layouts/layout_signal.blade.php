<!DOCTYPE html>
<html lang="ko">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Singal</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <nav class="brown lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><i class="material-icons">games</i>Signal</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/slist">SIGNAL List</a></li>
        <li><a href="/tsignal">SIGNAL Create</a></li>
        <li><a href="/buynsell">BUY A SELL Creaet</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="/slist"><i class="material-icons">my_location</i>SIGNAL List</a></li>
        <li><a href="/tsignal"><i class="material-icons">my_location</i>SIGNAL Create</a></li>
        <li><a href="/buynsell"><i class="material-icons">visibility</i>BUY A SELL Creaet</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  @yield('content')


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  <script src="/js/init.js"></script>

  </body>
</html>
