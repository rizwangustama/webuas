<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backrieland</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/swiper-bundle.css">
    <link rel="stylesheet" href="css/swipe-mode.css">
    {{-- <link rel="stylesheet" href="css/swiper-bundle.css"> --}}
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="css/boostrap-mod.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <style>

    </style>

<body>

    @include('component.header')

    @yield('conten')

    @include('component.footer')

    <script src="js/jquery.js"></script>
    <script src="{{ url('js/swiper-bundle.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script src="{{ url('js/bootsrap.bundle.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
