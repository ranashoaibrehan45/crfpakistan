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

                            @foreach(\App\Models\Category::where('header_link', true)->with('subcategories')->orderBy('name')->get() as $category)
                                 @if ((!$category->has_children && $category->pages->isEmpty()) || (!$category->isValidNavLink()))
                                    @continue
                                @endif
                                
                                @if ($category->has_children && $category->subcategories->isNotEmpty())
                                    <li class="nav-item dropdown">
                                        <a href="#" 
                                            class="nav-link dropdown-toggle" 
                                            data-toggle="dropdown"
                                        >
                                            {{ $category->name }}
                                        </a>
                                        <div class="dropdown-menu">
                                            @foreach($category->subcategories()->where('header_link', true)->get() as $subcategory)
                                                @if($subcategory->multiple_pages && $subcategory->pages->isNotEmpty())
                                                    <a class="dropdown-item no-caret" href="{{ route('subcategory.pages', ['categorySlug' => $category->slug, 'subCatSlug' => $subcategory->slug]) }}">
                                                        {{ $subcategory->name }}
                                                    </a>
                                                @elseif($subcategory->pages->isNotEmpty())
                                                    <a class="dropdown-item no-caret" href="{{ route('subcategory.page', ['categorySlug' => $category->slug, 'subCatSlug' => $subcategory->slug, 'pageSlug' => $subcategory->pages()->first()->slug]) }}">
                                                        {{ $subcategory->name }}
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </li>
                                @else
                                    @if($category->pages->isNotEmpty())
                                    <li class="nav-item">
                                        @if ($category->multiple_pages)
                                            <a class="dropdown-item no-caret" href="{{ route('category.pages', $category?->slug) }}">
                                                {{ $category?->name }}
                                            </a>
                                        @else
                                            <a class="dropdown-item no-caret" href="{{ route('category.page', ['categorySlug' => $category->slug, 'pageSlug' => $category->pages->first()->slug]) }}">
                                                {{ $category->name }}
                                            </a>
                                        @endif
                                    </li>
                                    @endif
                                @endif
                            @endforeach

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('album') }}">Gallery</a>
                            </li>
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

                        @foreach(\App\Models\Category::where('footer_link', true)->with('subcategories')->orderBy('name')->get() as $category)
                            @if ((!$category->has_children && $category->pages->isEmpty()) || (!$category->isValidNavLink()))
                                @continue
                            @endif

                            <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0 ">
                                <div class="foot-contact ">
                                    @if ($category->has_children && $category->subcategories->isNotEmpty())
                                    <h2>{{ $category->name }}</h2>
                                    <ul>
                                    @foreach($category->subcategories()->where('footer_link', true)->get() as $subcategory)
                                        @if($subcategory->pages->isNotEmpty())
                                        <li>
                                            @if($subcategory->multiple_pages)
                                            <a href="{{ route('subcategory.pages', ['categorySlug' => $category->slug, 'subCatSlug' => $subcategory->slug]) }}">
                                                <i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i>
                                                <span>{{ $subcategory->name }}</span>
                                            </a>
                                            @else
                                            <a href="{{ route('subcategory.page', ['categorySlug' => $category->slug, 'subCatSlug' => $subcategory->slug, 'pageSlug' => $subcategory->pages()->first()->slug]) }}">
                                                <i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i>
                                                <span>{{ $subcategory->name }}</span>
                                            </a>
                                            @endif
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>

                                    @else
                                        @if($category->pages->isNotEmpty())
                                            <h2>
                                            @if ($category->multiple_pages)
                                                <a href="{{ route('category.pages', $category->slug) }}">
                                                    {{ $category->name }}
                                                </a>
                                            @else
                                                <a href="{{ route('category.page', ['categorySlug' => $category->slug, 'pageSlug' => $category->pages->first()->slug]) }}">
                                                    {{ $category->name }}
                                                </a>
                                            @endif
                                            </h2>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        @endforeach

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
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{url('js/jquery-ui-1.8.2.custom.min.js')}}"></script>
        <script src="{{url('js/pirobox_extended.js')}}"></script>
        <script src="{{url('js/resource_script.js')}}"></script>
        
        <script src="{{ url('js/script.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>