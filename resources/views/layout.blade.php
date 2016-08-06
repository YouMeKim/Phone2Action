<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/app.css">

        @yield('header')

    </head>
    <body>
        <div id="header">
            <div class="content">
                <div id="title">
                    <a href="/">Advocacy</a>
                </div>
                <div class="button"><a href="/admin">admin</a></div>
            </div>
        </div>
        <div class="container">
            <div class="content">

                @yield('content')

            </div>
        </div>
    </body>
</html>
