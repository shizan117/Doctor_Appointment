<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-rDlUdbmyVZlRtd8A95AwpnbfdiIwWoIy6qq3RafA2JKczezgGYdC5Un7djF5tAwl" crossorigin="anonymous">

</head>
<body>

@include('layouts.nav')

@yield('content')

<script src="{{asset('assets')}}/js/bootstrap.bundle.js"></script>


</body>
</html>
