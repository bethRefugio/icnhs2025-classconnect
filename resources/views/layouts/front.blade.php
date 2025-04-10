<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DepEd Iligan') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('white') }}/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="{{ asset('colorlib') }}/css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s1301">
        @yield('content')


        <div style="clear:both" align="center">
        @auth()
            @include('layouts.navbars.navs.frontauth')
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
        @endauth
        </div>

    </div>
    
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
