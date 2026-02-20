<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
    <link rel="stylesheet" href="{{asset('css/header-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/home-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/form-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/index-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact-style.css')}}">
   
</head>
<body>
  
    @include('partials.header')
    @yield('content')
    @include('partials.footer')


    <script>
    function toggleMenu() {
        document.getElementById('navLinks').classList.toggle('active');
    }
</script>
</body>
</html>