<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DGS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
                background-image: url("{{asset('images/ui.jpg')}}");
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
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .banner-img{
                width: 50%;
                height: auto;
            }
            img{
                -webkit-filter: drop-shadow(5px 5px 5px #fff );
                filter: drop-shadow(5px 5px 5px #fff);
            }
            h1 {
                 text-shadow: 2px 2px #fff;
            }
            button{
              background-color: #2FE247;
              border: none;
              border-radius: 5px;
              padding: 8px 24px;
              text-align: center;
              font-size: 16px;
              margin: 4px 2px;
              transition: 0.3s;
            }
            button:hover{
                background-color: #7abf8d;
                background: linear-gradient(90deg, #02b2e8 0%, #02b2e8 35%, #00d4ff 100%);
            }
            a{
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        
                        <button><a href="{{ route('login') }}">Login</a></button>

                        @if (Route::has('register'))
                            <button><a href="{{ route('register') }}">Register</a></button>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{asset('images/DIU-Logo.png')}}" class="banner-img">
                </div>
                <h1>DIU Documents Generate System</h1>
            </div>
        </div>
    </body>
</html>
