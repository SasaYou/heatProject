<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('reset.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    @yield('style')

    <title>@yield('title')</title>
</head>
<body style="margin: 0;"> 
<div class="mainbody">
        <header>
            <h1>Melancholy test...</h1>
            <a href="/melancholy" class="home-button">TOPへ戻る</a>
        </header>
    @yield('contents')
</div>
<footer>
<br>
<div>
    <p class="fotter">@長門屋.inc</p>
</div>
</footer>
</body>
</html>