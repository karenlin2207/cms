<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/jquery.sidr.dark.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="col-sm-5">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img class="logo" src="/front/Header/Logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-7">
                <!-- Collapsed Hamburger -->
                    <div class="col-sm-12 text-right" id="phone">
                        <img src="/front/Header/Phone Icon.png">2780 0400  
                        <img src="/front/Header/Blue line.png">    
                        <img src="/front/Header/Whatsapp icon.png">
                        6444 4330
                    </div>
                    <div class="collapse navbar-collapse" id="left-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/about_us') }}">關於我們</a></li>
                            <li><a href="{{ url('/service') }}">商業債務催收</a></li>
                            <li><a href="{{ url('/handle') }}">糾紛處理</a></li>
                            <li><a href="{{ url('/professional') }}">專業調解</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
    <div class="app"  style="background-color: #f5f8fa;">
        @yield('content_second')
    </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left pull-left">
                    <a href="{{ url('/statement') }}">免責政策  </a>|
                    <a href="{{ url('/policy') }}">  私隱政策  </a>|
                    <a href="{{ url('/about_us') }}">  聯絡資料</a>
                </div>
                <div class="col-md-6 text-right pull-right">
                    &copy; 2017 {{ config('app.name', 'Laravel') }} 
                </div>
            </div>

            <div style="height: 80px">
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
