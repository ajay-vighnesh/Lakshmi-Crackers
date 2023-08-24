<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title inertia>{{ config('app.name', 'Sri Lakshmi Pyro Tech') }}</title>

    <!-- Favicons -->
    <!-- <link href="assets/img/LP CMYK.png" rel="icon">
    <link href="assets/img/LP CMYK.png" rel="favicon"> -->
    <link rel="icon" type="image/x-icon" href="/img/LP CMYK.png">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/gijgo.min.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">



     <!-- jquery plugins here-->
     <script src="../js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="../js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="../js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="../js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="../js/slick.min.js"></script>
    <script src="../js/gijgo.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead

   


</head>

<body class="font-sans antialiased">
    @inertia

    
    
  
</body>

</html>