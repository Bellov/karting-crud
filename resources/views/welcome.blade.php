<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




        <title>Каргин гараж</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #a4aaae;
                color: #636b6f;
                font-family: 'Arnoldboecklin';
                font-weight: 100;
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
                position: absolute;
                right: 60px;
                top: 5px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 120px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 430px;
            }
        </style>
    </head>
    <body>
    <div>
        <img class="img-responsive" src="http://sofiakarting.com/wp-content/uploads/2015/03/logo2x.png" alt="Chania">
    </div>
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif


                <div class="container">
                    <div class="content">
                        <div class="title"> Ринг Картинг </div>
                    </div>
                   {{--<a href="home" button type="index" class="btn btn-primary btn-lg btn-block">Към гаража</button></a>--}}


                    <a href="home" button type="button" class="btn btn-danger btn-lg btn-block">Към гаража </a></button>




                </div>

    </body>
</html>







