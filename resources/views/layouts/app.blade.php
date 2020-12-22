<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>La molisana</title>
    </head>
    <body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>


    @include('partials.footer')

    </body>
</html>
