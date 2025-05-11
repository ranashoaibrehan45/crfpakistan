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
        </style>
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
                            <a class=" " href="pdf/corona.pdf "><img class="corona " width="40px " height="40px " src="images/corona2.png "></a>
                            <a class=" " href="pdf/corona.pdf "><p class="corona1 ">Corona Preventions</p></a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .top-header-bar -->

            <br style="clear: both;">
            <div class="container ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <a class="navbar-brand " href="index.php ">
                        <img class="nav-logo " src="{{ url('images/logo.png') }} ">
                    </a>
                    <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                        <!--class="navbar-nav ml-auto "-->
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link " href="index.php ">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="# ">About Us</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="# ">Media Gallery</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="# ">From Director's Desk</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="contact_us.php ">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Slider -->

            <div style="clear: both"></div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                    <li data-target="#demo" data-slide-to="5"></li>
                    <li data-target="#demo" data-slide-to="6"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="{{url('images/slider/slider1.jpg')}} " alt="First slide ">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 " src="{{url('images/slider/slider2.jpg')}} " alt="Second slide ">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 " src="{{url('images/slider/slider3.jpg')}} " alt="Third slide ">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slider/slider4.jpg" alt="4th slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slider/slider5.jpg" alt=57th slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slider/slider6.jpg" alt="6th slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slider/slider7.jpg" alt="7th slide">
                    </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        <!--watch videos-->
    </header>
    <body>
        <div class="container ">
            <div class="row " style="padding:15px; ">
               <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 ">
                     <a href="# ">
                         <div class="icon-box ">
                             
                        <header class="entry-header " line-height='1'>
                            <br>
                            <h3 class="entry-title ">Projects & Activities</h3>
                        </header>
                        <div class="entry-content ">
                        <br> 
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 ">
                     <a href="# ">
                         <div class="icon-box ">
                             
                        <header class="entry-header ">
                            <br>
                            <h3 class="entry-title ">Working Group for inclusive Education</h3>
                        </header>
                        <div class="entry-content ">
                        
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 ">
                     <a href="# ">
                         <div class="icon-box ">
                             
                        <header class="entry-header ">
                            <br>
                            <h3 class="entry-title ">Resources</h3>
                        </header>
                        <div class="entry-content ">
                        <br> 
                        </div>
                    </div>
                    </a>
                </div>
                 
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-welcome ">
        
        <div class="container csj-welcome ">
            <div class="row ">
                <div class="col-12 col-lg-12 order-2 order-lg-1 ">
                    <div class="welcome-content ">
                        <header class="entry-header " style="margin-top:115px ">
                            <h2 class="entry-title ">Welcome to Centre for Resource and Facilitation Pakistan</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5 ">
                            <p>Established in 2025, Centre for Resource and Facilitation Pakistan (CrfPak) is a non-governmental organization Vision, Mission, and Objectives of the Organization
Vision:
To create an inclusive and just Organization where marginalized communities have equal access to opportunities, resources, and rights, fostering their personal, social, and economic empowerment.
Mission:
To uplift and empower disadvantaged communities by providing access to welfare programs, skill development, legal aid, and employment support, while promoting dignity, human rights, and environmental sustainability.
</p>
                        </div><!-- .entry-content -->

                        <!--<div class="entry-footer mt-5 ">
                            <a href="aboutus.php " class="btn1 gradient-bg mr-2 ">Read More</a>
                        </div>--><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <!--<div class="col-12 col-lg-6 mt-4 order-1 order-lg-2 ">
                    <!--<img src="images/logo.png " alt="welcome ">--></div><!-- .col images/welcome.jpg-->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-events ">
        <div class="container ">
            <div class="row ">
                   <div class="col-12 col-lg-6 ">
                    <div class="featured-cause ">
                        <div class="section-heading ">
                            <h2 class="entry-title ">Publications</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap approch d-flex flex-wrap justify-content-between ">
                         <ul class="list-group ">
                             
                        <!-- .section-heading mrgin -->
   <!--<span class="download "><a href=" ">Download Application Form Now!</a></span>--></li>
  <li class="list-group-item "><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><a href="# ">Research reports and studies</a></li>
  <li class="list-group-item "><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><a href="# ">Books</a></li>
  <li class="list-group-item "><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><a href="# ">Position Papers / Pamphlets</a></li>
 
</ul>

                           
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
             
                <div class="col-12 col-lg-6 ">
                    <div class="featured-cause ">
                     <div class="cause-wrap approch d-flex flex-wrap justify-content-between mywrap1 ">
                           <ul class="list-group ">
                             
                        <!-- .section-heading mrgin -->
                               <!--<span class="download "><a href=" ">Download Application Form Now!</a></span>--></li>
                              
                              <li class="list-group-item "><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><a href="# " target="documentaries.php ">Documentaries</a></li>
                              <li class="list-group-item "><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><a href="# " target="publications.php ">Publication with other organizations</a></li>
                              <li class="list-group-item "><i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i><a href="# " target="newsletter.php "> Human rights observer / Newsletter</a></li>
                             
                            </ul>

                           
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

<div class="our-causes ">
        <div class="container ">
            <div class="row ">
                <div class="coL-12 ">
                    <div class="section-heading ">
                        
                        <h2 class="entry-title ">Join us on Social Media</h2>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 ">
                    <div class="swiper-container causes-slider ">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide ">
                                <div class="cause-wrap ">
                                   <div class="cause-content-wrap ">
                                       <div class="col-12 col-md-12 col-lg-12 mt-5 mt-md-0 ">
                                        <div class="section-heading ">
                                        <a href="# "style="color:#0099ff " style= "font-size:20px "  target="_blank ">
                                            <img src="images/Tweeter.png " style="width:190px "style="height: 60px " style= "font-size:20px "  target="_blank ">
                                            
                                        </a>
                                       </div>
                                       
                                       <a class="twitter-timeline " data-height="560 " href="# "></a> <script async src="https://platform.twitter.com/widgets.js " charset="utf-8 "></script>
                                 <!-- .upcoming-events -->
                                </div><!-- .col -->
                               </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide ">
                                <div class="swiper-slide ">
                                <div class="cause-wrap ">
                                   <div class="cause-content-wrap ">
                                       <a href="https://www.facebook.com/CentreforResourceandFacilitation ">
                                            <div class="col-12 col-md-12 col-lg-12 mt-5 mt-md-0 ">
                                                <div class="section-heading ">
                                                   <a href="https://www.facebook.com/CentreforResourceandFacilitation " style="color:#0099ff " target="_blank ">
                                                       
                                                       <img src="images/fb.png " style="width:225px "style="height: 45px " style= "font-size:20px "  target="_blank "> </a>
                                                </div>
                                                
                                                <iframe src="https://www.facebook.com/CentreforResourceandFacilitation " scrolling="no " frameborder="0 " allowtransparency="true " style="border:none; overflow:hidden; width: 100%; margin-top: 10px; margin-bottom:
                            10px; height:535px "></iframe>
                                            </div>
                                      </a>
                               </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            </div><!-- .swiper-slide -->
                          <div class="swiper-slide ">
                                <div class="swiper-slide ">
                                <div class="cause-wrap ">
                                   <div class="cause-content-wrap ">
                                        <div class="col-12 col-md-12 col-lg-12 mt-5 mt-md-0 ">
                                       <div class="section-heading ">
                                      <a href="https://www.facebook.com/CentreforResourceandFacilitation " style="color:#0099ff " target="_blank ">
                                          <img src="# " style="width:190px " style= "font-size:20px "  target="_blank ">
                                          
                                      </a> 
                                     
                                       </div>
                                     
                                    <div class="entry-content ">
                                   <a href="https://www.facebook.com/CentreforResourceandFacilitation "> <img src="# " class="img-responsive " alt="PCMR " width="100% " height="515px "></a>
                                     </div>
                                 <!-- .upcoming-events -->
                                </div><!-- .col -->
                               </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            </div><!-- .swiper-slide -->
                       </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

        <footer class="site-footer ">
            <div class="footer-widgets ">
                <div class="container ">
                    <div class="row ">
                    <div class="col-12 col-md-6 col-lg-3 ">
                            <div class="foot-about ">
                                <a class="foot-logo " href="# "><h2><b> Centre for Resource and Facilitation Pakistan </b></h2></a>
                                <p>Centre for Resource and Facilitation Pakistan (CrfPak) was born in 2025 .
                                </p>
                                
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