<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Universe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("http://fonday.ru/images/tmp/10/9/original/109970niBCRIKyL8kn5M5w4ON5.jpg") ;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                border : 1px solid #E76D13;
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-right:hover {
                box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
                background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */
                color: #a00;
            }
            .top-right-auth {
                border : 1px solid #E76D13;
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-right-auth:hover {
                box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
                background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */
                color: #a00;
            }
            .top-right-reg {
                border : 1px solid #E76D13;
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-right-reg:hover {
                box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
                background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */
                color: #a00;
            }
            .content {
                text-align: center;
                margin-bottom: 10%;
            }

            .title {
                font-size: 84px;
            }

            .links li {
                display: inline;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-transform: uppercase;

            }
            a {text-decoration: none;
                color: white;
                font-family: 'Nunito', sans-serif;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Домой</a>
                    @else
                        <a href="{{ route('login') }}">Авторизация</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    The Universe
                </div>

                <div class="links">
                    @foreach($categories as $category)
                        <li>
                            <a href="/test/{{$category->id}}">{{$category->category_name}}</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
