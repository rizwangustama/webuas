<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/swiper-bundle.css">
    <link rel="stylesheet" href="css/swipe-mode.css">
    {{-- <link rel="stylesheet" href="css/swiper-bundle.css"> --}}
    <link rel="stylesheet" href="css/boostrap-mod.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

<body>

    @include('component.header')

    @yield('conten')

    @include('component.footer')

    <script src="js/jquery.js"></script>
    <script src="js/swiper-bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
