<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Centre for Resourceand Facilitation</title>

        <!-- Required meta tags -->

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="#" type="image/gif" sizes="32x32">
        <!-- slider CSS -->
        <link rel="stylesheet" href="{{url('css/dropdowns-enhancement.css')}}" />
        <link rel="stylesheet" href="{{url('css/flexslider.css')}}" />
        <link rel="stylesheet" href="{{url('css/style1.css')}}" />
        <link rel="stylesheet" href="{{url('css/gallery.css')}}" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" />
        <!-- Gallery -->

        <!-- ElegantFonts CSS -->
        <link rel="stylesheet" href="{{url('css/elegant-fonts.css')}}" />

        <!-- themify-icons CSS -->
        <link rel="stylesheet" href="{{url('css/themify-icons.css')}}" />

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{url('css/swiper.min.css')}}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{url('css/resources_style.css')}}" />
        <link rel="stylesheet" href="{{url('css/style.css')}}" />
        <link rel="stylesheet" href="{{url('css/mystyle.css')}}" />
        <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .no-caret::after {
            display: none !important;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #463f3f;
        }
        </style>
        @yield('page-specific-css')
    </head>

    <body>
        <header class="site-header">
            <div class="top-header-bar">
                <div class="container">
                    <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                        <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email"></div>
                            <div class="header-bar-email mt-1 ">
                                <i class="fa fa-envelope "></i> <a href="# ">director@crfpakistan.org</a>
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text mt-1 ">
                                <p><i class="fa fa-phone "></i> <span>+92 (0300) 6005226</span></p>
                            </div><!-- .header-bar-text -->
                            <a class=" " href="pdf/corona.pdf ">
                                <img class="corona " width="40px " height="40px " src="{{ url('images/corona2.png') }}">
                            </a>
                            <a class=" " href="pdf/corona.pdf "><p class="corona1 ">Corona Preventions</p></a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .top-header-bar -->

            <br style="clear: both;">
            <div class="container ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="nav-logo" src="{{ url('images/logo.png') }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">Home</a>
                            </li>

                            @foreach(\App\Models\Category::with('subcategories')->orderBy('name')->get() as $category)
                                @if ($category->subcategories->isNotEmpty())
                                    <li class="nav-item dropdown">
                                        <a href="#" 
                                            class="nav-link dropdown-toggle" 
                                            data-toggle="dropdown"
                                        >
                                            {{ $category->name }}
                                        </a>
                                        <div class="dropdown-menu">
                                            @foreach($category->subcategories as $subcategory)
                                                <a class="dropdown-item no-caret" href="{{ route('page', $subcategory->page->slug) }}">
                                                    {{ $subcategory->name }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{ $category->name }}</a>
                                    </li>
                                @endif
                            @endforeach

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact.create') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <br style="clear: both;">
    </header>
    <body>
        @yield('content')    
        
        <footer class="site-footer ">
            <div class="footer-widgets ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-12 col-md-6 col-lg-3 ">
                            <div class="foot-about ">
                                <a class="foot-logo " href="# ">
                                    <h2>
                                        <b> Centre for Resource and Facilitation Pakistan </b>
                                    </h2>
                                </a>
                                <p>Centre for Resource and Facilitation Pakistan (CrfPak) was born in 2025 .</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0 ">
                            <div class="foot-contact ">
                                <h2>Quick Links</h2>
                                <ul>
                                    <a href="index.php "></a><li><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><span>Home</span></li></a>
                                    <a href="aboutus.php "> <li><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><span>About us</span></li></a>
                                    <a href="gallery.php "><li><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><span>Media Gallery</span></li></a>
                                    <a href="contact_us.php "><li><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><span>Contact us</span></li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0 ">
                            <div class="foot-contact ">
                                <h2>Contact</h2>
                                <ul>
                                    <li><i class="fa fa-phone "></i><span>+92 (300) 6005226 </span></li>
                                    <li><i class="fa fa-phone "></i><span>+92 (300) 6005226</span></li>
                                    <li><i class="fa fa-envelope "></i><span>crfpak@gmail.com</span></li>
                                    <li><i class="fa fa-envelope "></i><span>director@crfpakistan.org</span></li>
                                    <li><i class=" "></i><span><a href=https://www.facebook.com/CentreforResourceandFacilitation/><i class="fa fa-youtube-square "></i></a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="https://www.facebook.com/CentreforResourceandFacilitation/ ""><i class="fa fa-twitter"></i></a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="https://www.facebook.com/CentreforResourceandFacilitation/"><i class="fa fa-facebook"></i></a></span>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <!--
                            <div class="subscribe-form">
                                <form class="d-flex flex-wrap align-items-center">
                                    <input type="email" placeholder="Your email">
                                    <input type="submit" value="send">
                                </form>
                            </div>
                            -->


                    </div>
                </div>
            </div>

            <div class="footer-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="m-0">
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Website made by <a href="https://twitter.com/SanawarBalam" target="_blank">Saira Sanawar | Email: sanawarbalam@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        
        @yield('page-specific-js')
        <script>
            (function($) { // Begin jQuery
              $(function() { // DOM ready
                // If a link has a dropdown, add sub menu toggle.
                $('nav ul li a:not(:only-child)').click(function(e) {
                  $(this).siblings('.nav-dropdown').toggle();
                  // Close one dropdown when selecting another
                  $('.nav-dropdown').not($(this).siblings()).hide();
                  e.stopPropagation();
                });
                // Clicking away from dropdown will remove the dropdown class
                $('html').click(function() {
                  $('.nav-dropdown').hide();
                });
                // Toggle open and close nav styles on click
                $('#nav-toggle').click(function() {
                  $('nav ul').slideToggle();
                });
                // Hamburger to X toggle
                $('#nav-toggle').on('click', function() {
                  this.classList.toggle('active');
                });
              }); // end DOM ready
            })(jQuery); // end jQuery
        </script>
        <script src="{{url('js/jquery-ui-1.8.2.custom.min.js')}}"></script>
        <script src="{{url('js/pirobox_extended.js')}}"></script>
        <script src="{{url('js/resource_script.js')}}"></script>
        
        <script src="{{ url('js/script.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>