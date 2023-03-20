
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elzero</title>
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/elzero.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>
<body>
<!-- Start Header -->
<header class="header" id="header">
    <div class="container">
        <a href="/" class="logo">Elzero</a>
        <ul class="main-nav">
            <li><a class="{{Request::is('articles') ? 'current_page_item':''}}" href="/about">Articles</a></li>
            <li><a class="{{Request::path()==='gallery' ? 'current_page_item':''}}" href="#gallery">Gallery</a></li>
            <li><a class="{{Request::path()==='article' ? 'current_page_item':''}}" href="#article">Gallery</a></li>
            <li><a class="{{Request::path()==='features' ? 'current_page_item':''}}" href="#features">Features</a></li>
            <li>
                <a href="#">Other Links</a>
                <!-- Start Megamenu -->
                <div class="mega-menu">
                    <div class="image">
                        <img src="imgs/megamenu.png" alt="" />
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#testimonials"><i class="far fa-comments fa-fw"></i> Testimonials</a>
                        </li>
                        <li>
                            <a href="#team"><i class="far fa-user fa-fw"></i> Team Members</a>
                        </li>
                        <li>
                            <a href="#services"><i class="far fa-building fa-fw"></i> Services</a>
                        </li>
                        <li>
                            <a href="#our-skills"><i class="far fa-check-circle fa-fw"></i> Our Skills</a>
                        </li>
                        <li>
                            <a href="#work-steps"><i class="far fa-clipboard fa-fw"></i> How It Works</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="#events"><i class="far fa-calendar-alt fa-fw"></i> Events</a>
                        </li>
                        <li>
                            <a href="#pricing"><i class="fas fa-server fa-fw"></i> Pricing Plans</a>
                        </li>
                        <li>
                            <a href="#video"><i class="far fa-play-circle fa-fw"></i> Top Videos</a>
                        </li>
                        <li>
                            <a href="#stats"><i class="far fa-chart-bar fa-fw"></i> Stats</a>
                        </li>
                        <li>
                            <a href="#discount"><i class="fas fa-percent fa-fw"></i> Request A Discount</a>
                        </li>
                    </ul>
                </div>
                <!-- End Megamenu -->
            </li>
        </ul>
    </div>
{{--    @yield('header')--}}
</header>
<!-- End Header -->
@yield('content')
<!-- End Footer -->
<script src="js/main.js"></script>
</body>
</html>

