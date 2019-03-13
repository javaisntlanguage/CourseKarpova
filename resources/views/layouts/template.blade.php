<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html, body {
            background: url("http://fonday.ru/images/tmp/10/9/original/109970niBCRIKyL8kn5M5w4ON5.jpg") no-repeat fixed;
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .full-height {
            height: 100vh;
        }
        .top-right {
            font-size: x-large;
            position: absolute;
            right: 30px;
            top: 18px;
        }
        .links li {
            display: inline;
            padding: 0 25px;
            font-size: x-large;
            font-weight: 600;
            letter-spacing: .1rem;
            text-transform: uppercase;

        }
        .title {
            position: absolute;
            top: 20%;
            left: 42%;
            font-size: 84px;
        }
        .content {
            text-align: center;
            margin-bottom: 12%;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        a {text-decoration: none;
            color: white;
            font-family: 'Nunito', sans-serif;
        }
        @yield('style')
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
<div class="top-right links">
@if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">{{Auth::user()->name}}</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registration</a>
                @endif
            @endauth
    @endif
</div>
    <div class="content">
        <div class="title m-b-md">
            <a href="/">{{config('app.name')}}</a>
        </div>
@yield('content')
</div>
</body>
</html>

