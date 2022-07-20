<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/bootstrap-icons.css" rel="stylesheet">

    <link href="/css/tooplate-crispy-kitchen.css" rel="stylesheet">

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}"
                       href="{{ route('index') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">Story</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'menu' ? 'active' : '' }}"
                       href="{{ route('menu') }}">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'news' ? 'active' : '' }}" href="{{ route('news') }}">Our
                        Updates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'contacts' ? 'active' : '' }}"
                       href="{{ route('contacts') }}">Contact</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<main>
    {{ $container }}
</main>

<footer class="site-footer section-padding">

    <div class="container">

        <div class="row">

            <div class="col-12">
                <h4 class="text-white mb-4 me-5">{{ env('APP_NAME') }}</h4>
            </div>

            <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                <p>121 Einstein Loop N, Bronx, NY 10475, United States</p>

                <a href="https://goo.gl/maps/wZVGLA7q64uC1s886" class="custom-btn btn btn-dark mt-2">Directions</a>
            </div>

            <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                <p class="mb-2">Monday - Friday</p>

                <p>10:00 AM - 08:00 PM</p>

                <p>Tel: <a href="tel: 010-02-0340" class="tel-link">010-02-0340</a></p>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                <h6 class="text-white mb-lg-4 mb-3">Social</h6>

                <ul class="social-icon">
                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                    <li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                           class="social-icon-link bi-twitter"></a></li>

                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                </ul>

                <p class="copyright-text tooplate-mt60">Copyright &copy; {{ env('APP_NAME') }} Co., Ltd.
                    <br>Design: <a rel="nofollow" href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>

            </div>

        </div><!-- row ending -->

    </div><!-- container ending -->

</footer>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
