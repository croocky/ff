<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Swifty</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
</head>
<body>
  <div class="content windows-all">

    <header class="header">
    <a href="/" class="header__logo-w">
    <img src="{{ asset('imgsvg/logo.svg') }}" class="header__logo" alt="Logo">
    </a>

    <nav class="nav">
    <a href="#" class="nav__item nav__item_active">Welcome</a>
    <a href="#" class="nav__item nav__item_active">Opportunities</a>
    <a href="#" class="nav__item nav__item_active">For investors</a>
    <a href="#" class="nav__item nav__item_active">White papers</a>
    <a href="#" class="nav__item nav__item_active">About us</a>
    <a href="/login" class="nav__item nav__item_right nav__item_active"><img class="nav__item__img" src="{{ asset('imgsvg/login.svg') }}" alt="LC" >Log in</a>
    </nav>

    <a href="#" class="header__lang">

    </a>
    <img onclick="windows.openWindow('.wi-nav')" class="header__burger" src="{{ asset('imgsvg/burger.svg') }}" alt="Nav">

    </header>
          <div class="content__inner">

  @yield('content')
</div>

  <div class="login rightsidebar">
    <div class="login__heading-nav">
      <div class="login__heading-nav-item login__heading-nav-item_active">
        Войти
      </div>
      <div class="login__heading-nav-item ">
        Регистрация
      </div>
    </div>
    <div class="login__content">
      <form action ='' method = 'post'>
      <input name ='login' type="text">
      <input name ='password' type="password">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="submit" value="Войти">
      </form>
      <div class="login__lable">
        <div class="login__lable-item">
          <img class="login__lable-item-img" src="{{ asset('/imgsvg/cap.svg') }}" alt="Cap">
          <span class="login__lable-item-text">Ваши инвестиции застрахованны</span>
        </div>
        <div class="login__lable-item">
          <img class="login__lable-item-img" src="{{ asset('/imgsvg/visa.svg') }}" alt="Visa">
          <span class="login__lable-item-text">Выплаты на международные платежные  системы</span>
        </div>
        <div class="login__lable-item">
          <img class="login__lable-item-img" src="{{ asset('/imgsvg/key.svg') }}" alt="Key">
          <span class="login__lable-item-text">Ваши персональные данные под надежной защитой</span>
        </div>
      </div>


    </div>
  </div>
  <div id="app"></div>


</div>
<div class="windows">
  <div class="wi-nav windows__item">
    <div class="wi__close"><img class="wi__close-img" src="{{ asset('/imgsvg/close.svg') }}" alt="Close"></div>
    <a href="#" class="wi-nav__item">Welcome</a>
    <a href="#" class="wi-nav__item">Opportunities</a>
    <a href="#" class="wi-nav__item">For investors</a>
    <a href="#" class="wi-nav__item">White papers</a>
    <a href="#" class="wi-nav__item">About us</a>
    <a href="/login" class="wi-nav__item"><img class="wi-nav__item-img" src="{{ asset('imgsvg/login.svg') }}" alt="LC" >Log in</a>
  </div>
</div>
<script src="{!! asset('js/app.js') !!}"></script>
</body>
</html>
