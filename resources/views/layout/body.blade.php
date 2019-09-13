<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
           <link rel="stylesheet" href="css/bootstrap.min.css" />
           <link rel="stylesheet" href="css/font-awesome.min.css" />
           <link rel="stylesheet" href="css/style.css" />
           <link rel="stylesheet" href="css/helper.css" />

	<meta name="viewport" content="width=device-width, user-scalable=no">

    </head>
    <body>
	<div class="header-section section header-sticky">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class='col-auto mr-auto'>
                        <div class="header-logo">
                            <img src="../resources/img/logo.jpg" ></a>
                        </div>
                    </div><!-- Header Logo End -->

                    <!-- Main Menu One Start -->
                    <div class="col-auto d-none d-lg-block position-static">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="menu-item-has-children"> <a href="{{ url('/') }}">Inicio</a></a>                          </li>
                                    <li class="menu-item-has-children"> <a href="{{ url('/portafolio') }}">Portafolio</a>              </li>
                                    <li class="menu-item-has-children"> <a href="{{ url('/aboutMe') }}">Biografía</a></a>  </li>
                                    <li class="menu-item-has-children"> <a href="{{ url('/contacto') }}">Contacto</a></a>						</li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- Main Menu One End -->

                    <!-- User & Cart & Mobile Menu Button Start -->
                    <div class="col-auto d-flex flex-wrap align-items-center">
                        <div class="header-action">
                            <a href="contact.html" class="btn d-none d-sm-block is-error">Contratame</a>
                            <button class="mobile-menu-toggle d-lg-none"><i></i></button>
                        </div>
                    </div>
					<!-- User & Cart & Mobile Menu Button End -->

                </div>
            </div>
        </div>

		@yield('contenido')
		<br/>
		@include('layout.footer')
		<div class="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger"><i class="icofont-close-line"></i></a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <nav class="offcanvas-navigation">
                        <ul>
									<li class="menu-item-has-children"><a href="index.html">Home</a></li>
                                    <li class="menu-item-has-children"><a href="about-us.html">Portafolio</a></li>
                                    <li class="menu-item-has-children"><a href="portfolio-gutter-fullwidth-3.html">Biografía</a></li>
                                    <li class="menu-item-has-children"><a href="blog-right-sidebar.html">Blog</a></li>
                                    <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                        </ul>
                    </nav>

                    <div class="offcanvas-widget-area">
                        <div class="offcanvas-contact-widget">
                            <ul class="header-contact-info">
                                <li><i class="fa fa-phone"></i> <a href="tel://3143979659">+57 - 3143979659 </a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:gonzalezfelipe784@gmail.com">gonzalezfelipe784@gmail.com</a></li>
                            </ul>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="offcanvas-widget-social">
                            <a href="https://www.facebook.com/felipegonzalez09" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/_Moscas" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/felipe-gonzalez-3931b0170" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/channel/UCd1hK7iYcD8m1hrWEnK2vsw?view_as=subscriber" title="Youtube"><i class="fa fa-youtube-play"></i></a>
							
                            <a href="https://github.com/FelipeG23" title="Github"><i class="fa fa-github"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        </div>
    </body>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/main.js"></script>
</html>
