<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>@yield('title_page') | La Molisana</title>
</head>
<body>
    @include('static_parts.header')

    <main>
        @yield('content')
    </main>
    

    @include('static_parts.footer')
</body>
</html>