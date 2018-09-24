<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Sample')- Laravel 新手入门教程</title>
    <link rel="stylesheet"  href="/css/app.css">
</head>
<body>
    <!--
    <header class="nvbar nvbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                <a href="/" id="logo">Sample App</a>
                <nav>
                    <ul class="nav nvbar-nav navbar-right">
                        <li><a href="/help">帮助</a></li>
                        <li><a href="#">登录</a></li>
                    </ul>
                </nav>
            </div>
        </div>


    </header>
    !-->
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

   
</body>
</html>