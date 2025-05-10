
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <a class="foot-logo" href="#"><h2><b>Centre for Social Justice </b></h2></a>

                            <p>Centre for Social Justice (CSJ) was born in October 2014 and accredited as a legal entity under the Societies Registration Act (XXI of 1860) in March 2015. CSJ brings together a unique combination of experienced professionals in human rights, law, journalism, practitioners in development and peace-building, to serve as members of Governing Body.

</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="https://www.youtube.com/channel/UC4O1ohwOPGJTBwbTu456S0w?view_as=subscriber"><i class="fa fa-youtube-square"></i></a></li>
                                <li><a href="https://www.facebook.com/Centre-For-Social-Justice-392826647567103/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/csjpak/status/1174401203146493953"><i class="fa fa-twitter"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                         <h2>Join Us On Facebook</h2>
                        <iframe src="http://www.facebook.com/plugins/fan.php?id=392826647567103&amp;width=380&amp;connections=10&amp;stream=true&amp;header=true&amp;locale=en_US" scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:250px; height:380px"></iframe>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                       <h2>Useful Links</h2>

                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php">About us</a></li>
                            <li><a href="documentaries.php"> Documentaries</a>
                            <li><a href="Newsletter.php">Newsletter</a></li>
                            <li><a href="http://csjpak.org/csj/gallery.php">Gallery</a></li>
                            <li><a href="contact us.php">Contact us</a></li>
                            
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+92-423-6661322</span></li>
                                <li><i class="fa fa-envelope"></i><span>csjpakistan@gmail.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>E – 58, Street # 8, Officers’ Colony, Walton Road,
Lahore – 54180 Pakistan</span></li>
                            </ul>
                        </div>

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Website made by <a href="index.php" target="_blank">IT Team Center For Social Justice Organization</a>
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