@extends('layouts.front')

@section('content')
<div class="single-page portfolio-contact">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact Us</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
    
    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get in touch with us</h2>

                        <p>We appreciate that you have decided to contact us. Please use one of the given below methods to contact us, and certainly we will get back to you very soon.</p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            
                            <li><span class="fb"><a href="https://www.facebook.com/CentreforResourceandFacilitation/"><i class=" fa fa-facebook myfb"></i></a></span></li>
                            <li><span class="twt"><a href="https://www.facebook.com/CentreforResourceandFacilitation/"><i class="fa fa-twitter mytwt"></i></a></span></li>
                            <li><span class="tube"><a href="https://www.facebook.com/CentreforResourceandFacilitation/"><i class="fa fa-youtube-square mytube"></i></a></span></li>
                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+92 (300) 6005226</span></li>
                            <li><i class="fa fa-phone"></i><span>+92 (300) 6005226</span></li>
                            <li><i class="fa fa-envelope"></i><span>info@crfpakistan.org</span></li>
                             <li><i class="fa fa-envelope"></i><span>director@crfpakistan.org</span></li>

                            <li><i class="fa fa-map-marker"></i><span>House – 02, Street # 1, Essa Nagar’ Factory Area, Sargodha – 40100 Pakistan</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
                    <x-alert />
                    <form class="contact-form myform" action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <input type="text" name="subject" placeholder="Subject" required>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="phone" placeholder="Phone No">
                        <textarea name="message" rows="15" cols="6" placeholder="Messages" required></textarea>

                        <span>
                            <input class="btn1 gradient-bg" type="submit" name="insert" value="Contact us">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->
            </div>
        </div>
    </div>        
</div>
@endsection