<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <ul>
       <li> Klik <a href="/info">hier</a> voor info </li>
       <li> Klik <a href="/contact">hier</a> voor de contactpagina </li>
       <li> Klik <a href="/">hier</a> voor de homepage </li>
    </ul>

    @yield('content')

</body>
</html>