<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Galactic eSports and Gaming HTML5 Template">
    <meta name="author" content="ThemeEaster">

    <title>Robot Fest</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_public/img/favicon.png')}}">

    <link rel="stylesheet" href="{{ asset('assets_public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/keyframe-animation.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/blog.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/shop.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/elements.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_public/css/responsive.css')}}">

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="site-preloader">
        <div class="spinner"></div>
    </div>
    <!--site preloader-->

    <header class="header">
        <div class="primary-header">
            <div class="container">
                <div class="primary-header-inner">
                    <div class="header-logo">
                        <a href="{{ route('public.inicio') }}">
                            <img class="logo" src="{{ asset('assets_private/images/logo/EMI_fondo_transparente.png')}}" alt="Logo">
                        </a>
                    </div><!-- /.header-logo -->
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li class="{{ request()->routeIs('public.inicio') ? 'active' : '' }}"><a href="{{ route('public.inicio') }}">INICIO</a></li>
                            <li class="{{ request()->routeIs('public.eventos') ? 'active' : '' }}"><a href="{{ route('public.eventos') }}">EVENTOS</a></li>
                            <li class="{{ request()->routeIs('public.categorias') ? 'active' : '' }}"><a href="{{ route('public.categorias') }}">CATEGORIAS</a></li> 
                             <li class="{{ request()->routeIs('public.contacto') ? 'active' : '' }}"><a href="{{ route('public.contacto') }}">CONTACTO</a></li>
                        </ul>
                    </div><!-- /.header-menu-wrap -->
                    <div class="header-right">
                        <a class="default-btn" href="{{ route('login') }}">Iniciar Sesión</a>
                        <!-- Burger menu -->
                        <div class="mobile-menu-icon">
                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>
                        </div>
                    </div><!-- /.header-right -->
                </div><!-- /.primary-header-one-inner -->
            </div>
        </div><!-- /.primary-header -->
    </header><!-- /.site-header-->

    @yield('content')

    <footer class="footer-section">
        <div class="container">
            <div class="row footer-items">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-item">
                        <a class="brand" href="index.html"><img src="{{ asset('assets_private/images/logo/EMI_fondo_transparente.png')}}" alt="logo"></a>
                        <p>Nuestro éxito en la creación de soluciones empresariales se debe en gran parte a nuestro talento y alta equipo comprometido.</p>
                        <ul class="social-list">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-item footer-list">
                        <div class="widget-title">
                            <h3>Enlaces útiles</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="upcoming-matches.html">Tournaments</a></li>
                            <li><a href="faq-page.html">Help Center</a></li>
                            <li><a href="about.html">Privacy and Policy</a></li>
                            <li><a href="about.html">Terms of Use</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-item">
                        <div class="widget-title">
                            <h3>Contáctenos</h3>
                        </div>
                        <ul class="footer-contact">
                            <li><span>Ubicación:</span>153 Williamson Plaza, Maggieberg, MT 09514</li>
                            <li><span>Únase a nosotros:</span>Info@YourGmail24.com</li>
                            <li><span>Teléfono:</span>+1 (062) 109-9222</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-item subscribe-wrap">
                        <div class="widget-title">
                            <h3>Suscripción al boletín</h3>
                        </div>
                        <form action="#" class="subscribe-form">
                            <input class="form-control" type="email" name="email" placeholder="Tu correo electrónico" required="">
                            <input type="hidden" name="action" value="mailchimpsubscribe">
                            <button class="submit">Suscríbete Ahora</button>
                            <div class="clearfix"></div>
                            <div id="subscribe-result">
                                <div class="subscription-success"></div>
                                <div class="subscription-error"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p>© <span id="currentYear"></span> Robot Fest Todos los derechos reservados.</p>
            </div>
        </div>
        <!--copyright-wrap-->
    </footer>
    <!--footer-section-->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top hover-target"><i class="las la-arrow-up"></i></button>
    </div>
    <!--scrollup-->

    <!--jQuery Lib-->
    <script src="{{ asset('assets_public/js/vendor/jquary-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/odometer.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/venobox.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/swiper.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/smooth-scroll.js')}}"></script>
    <script src="{{ asset('assets_public/js/vendor/wow.min.js')}}"></script>
    <script src="{{ asset('assets_public/js/contact.js')}}"></script>
    <script src="{{ asset('assets_public/js/main.js')}}"></script>

</body>

</html>
