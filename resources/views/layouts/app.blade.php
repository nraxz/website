<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/app.css">
        <script src="js/app.js" charset="utf-8"></script>
        <title>Website build in Laravel</title>
    </head>
    <body>
        @include('inc.navbar')
        <main role="main" class="container">

            @if(Request::is('/'))
                @include('inc.showcase')
            @endif

            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('inc.message')
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @yield('sidebar')
                </div>
            </div>
        </main>
        <footer id="footer" class="text-center">
            <p> Copyright 2019 &copy; Alutama</p>
        </footer>
    </body>

</html>