<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpriverthemes.com/HTML/drake/home1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 13:03:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drake - OnePage Portfolio HTML5 Template</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}portfolio/assets/images/favicon.png">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="{{ asset('/') }}portfolio/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}portfolio/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}portfolio/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}portfolio/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}portfolio/assets/css/smooth-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('/') }}portfolio/assets/css/lightbox.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}portfolio/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}portfolio/assets/css/responsive.css">

</head>
<body class="home1-page">

<video class="body-overlay" muted autoplay loop>
    <source src="{{ asset('/') }}portfolio/assets/images/video1.mp4" type="video/mp4">
</video>

<div class="page-loader">
    <div class="bounceball"></div>
</div>

<span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
</span>

<div class="global-color">
        <span class="setting-toggle">
            <i class="las la-cog"></i>
        </span>
    <div class="inner">
        <div class="overlay"></div>
        <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
            <h2>Configuration</h2>
            <div class="global-color-option-inner">
                <p>Colors</p>
                <div class="color-boxed">
                    <a href="#" class="clr-active" onclick="color1();"></a>
                    <a href="#" onclick="color2();"></a>
                    <a href="#" onclick="color3();"></a>
                    <a href="#" onclick="color4();"></a>
                    <a href="#" onclick="color5();"></a>
                    <a href="#" onclick="color6();"></a>
                    <a href="#" onclick="color7();"></a>
                    <a href="#" onclick="color8();"></a>
                </div>

                <p>THREE DIMENSIONAL SHAPES</p>
                <ul class="themes">
                    <li class="active"><a href="home1.html">Earth Lines Sphere</a></li>
                    <li><a href="home2.html">3D Abstract Ball</a></li>
                    <li><a href="home3.html">Water Waves</a></li>
                    <li><a href="home4.html">Liquids Wavy</a></li>
                    <li><a href="home6.html">Solid Color</a></li>
                    <li><a href="home5.html">Simple Strings</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('portfolio.include.right-sidebar')

<ul class="menu scroll-nav d-flex">
    <li>
        <a class="scroll-to" href="#home">
            <span>Home</span> <i class="las la-home"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#about">
            <span>About</span> <i class="lar la-user"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#resume">
            <span>Resume</span> <i class="las la-briefcase"></i>
        </a>
    </li>
    <li>
        <a href="#services">
            <span>Services</span> <i class="las la-stream"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#skills">
            <span>Skills</span> <i class="las la-shapes"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#portfolio">
            <span>Portfolios</span> <i class="las la-grip-vertical"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#testimonial">
            <span>Testimonial</span> <i class="lar la-comment"></i>
        </a>
    </li>
    <li>
        <a class="scroll-to" href="#contact">
            <span>Contact</span> <i class="las la-envelope"></i>
        </a>
    </li>
</ul>

@include('portfolio.include.left-sidebar')

@yield('body')


<script src="{{ asset('/') }}portfolio/assets/js/jquery.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/owl.carousel.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/gsap.min.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/ScrollTrigger.min.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/ScrollToPlugin.min.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/lightbox.min.js"></script>

<script src="{{ asset('/') }}portfolio/assets/js/main.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/ajax-form.js"></script>
<script src="{{ asset('/') }}portfolio/assets/js/color.js"></script>
</body>

<!-- Mirrored from wpriverthemes.com/HTML/drake/home1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 13:03:31 GMT -->
</html>

