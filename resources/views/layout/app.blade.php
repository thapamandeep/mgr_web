<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langhali magar samaj</title>

    <link rel="icon" type="image/png" href="{{asset('img/lesotho.png')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
     
    <link rel="stylesheet" href="{{asset('css/header-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/home-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/form-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/index-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/aboutUs.css')}}">
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
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{asset('js/hero-slide.js')}}"></script>
<script src="{{asset('js/aboutUs.js')}}"></script>
</body>
</html>

<!-- favicon -->