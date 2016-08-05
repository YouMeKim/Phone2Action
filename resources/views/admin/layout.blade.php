<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            body {
                font-family: "Lato", sans-serif;
            }
        </style>

        @yield('header')

    </head>
    <body>
        <div class="container">
            <div class="content">

                @yield('content')

            </div>
        </div>
    </body>
</html>
