<!doctype html>

<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body style="background-color:aquamarine">
@include('commons.errorMessages')
@include('commons.navbar')

@yield('main')

<footer class="text-center">
    <small>ah-memo / 薬・サプリ記録帳</small>
</footer>

</body>

</html>