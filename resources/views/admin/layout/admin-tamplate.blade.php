<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langhali samaj </title>
    <link rel="stylesheet" href="{{asset('css/admin-header.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero/hero.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/aboutus-form.css')}}">
</head>
<body>
    @include('partials.admin.header')
    @yield('content')

</body>
</html>