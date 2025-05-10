
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <a class="foot-logo" href="#"><h2><b> Centre for Resource and Facilitation Pakistan </b></h2></a>
                            <p>Centre for Resource and Facilitation Pakistan (CrfPak) was born in 2025 .
                            </p>
                             
                         </div>
                    </div>
                     <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Quick Links</h2>
                             <ul>
                                <a href="index.php"></a><li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><span>Home</span></li></a>
                                <a href="aboutus.php"> <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><span>About us</span></li></a>
                                <a href="gallery.php"><li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><span>Media Gallery</span></li></a>
                                 <a href="contact_us.php"><li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><span>Contact us</span></li></a>
                            </ul>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>
                              <ul>
                                <li><i class="fa fa-phone"></i><span>+92 (300) 6005226 </span></li>
                                <li><i class="fa fa-phone"></i><span>+92 (300) 6005226</span></li>
                                <li><i class="fa fa-envelope"></i><span>crfpak@gmail.com</span></li>
                                <li><i class="fa fa-envelope"></i><span>director@crfpakistan.org</span></li>
                                <li><i class=""></i><span><a href=https://www.facebook.com/CentreforResourceandFacilitation/><i class="fa fa-youtube-square"></i></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="https://www.facebook.com/CentreforResourceandFacilitation/""><i class="fa fa-twitter"></i></a>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Website made by <a href="https://twitter.com/SanawarBalam" target="_blank" >Saira Sanawar | Email: sanawarbalam@gmail.com</a>
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	


	
	

    <script type='text/javascript' src='js/jquery1.min.js'></script>
     <script src="js/bootstrap.min.js"></script>	
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
        <script type='text/javascript' src="js/gallery.js"></script>
          <script>
          $(document).ready(function() {
  (function() {
    var showChar = 200;
    var ellipsestext = "...";

    $(".truncate").each(function() {
      var content = $(this).html();
      if (content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content;
        var html =
          '<div class="truncate-text" style="display:block">' +
          c +
          '<span class="moreellipses">' +
          ellipsestext +
          '&nbsp;&nbsp;<a href="" class="moreless more Read-Button ">Read More</a></span></span></div><div class="truncate-text" style="display:none">' +
          h +
          '<a href="" class="moreless less">Read Less</a></span></div>';

        $(this).html(html);
      }
    });

    $(".moreless").click(function() {
      var thisEl = $(this);
      var cT = thisEl.closest(".truncate-text");
      var tX = ".truncate-text";

      if (thisEl.hasClass("less")) {
        cT.prev(tX).toggle();
        cT.slideToggle();
      } else {
        cT.toggle();
        cT.next(tX).fadeToggle();
      }
      return false;
    });
    /* end iffe */
  })();

  /* end ready */
});


</script> 
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
	
  
  <script src='js/jquery-ui-1.8.2.custom.min.js'></script> 
  <script src='js/pirobox_extended.js'></script> 
  <script src='js/resource_script.js'></script>
  
  <script type="text/javascript">

            $pb(document).ready(function () {

                //alert(1);

                $pb().piroBox_ext({

                    piro_speed: 700,

                    bg_alpha: 0.5,

                    piro_scroll: true // pirobox always positioned at the center of the page

                });

            });

        </script> 
        	 
		
		<script src='js/script.js'></script>  
		<script src="js/jssor.js"></script> 

   <script src="js/jssor.slider.js"></script>
		 
   

  
</body>
</html>