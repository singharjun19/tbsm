<a href="tel:+918882227180" class="float-whatsapp float-call">
  <i class="fa fa-phone my-float-call"></i>
</a>
<a href="https://api.whatsapp.com/send?phone=918882227180" class="float-whatsapp" target="blank">
  <i class="fa fa-whatsapp my-float"></i>
</a>


<footer>
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 order_2">
          <div class="footer_heading">
            <h3>Quick Links</h3>
          </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">  
            <div class="products_category">
                <ul>
                  <li><a href="#">Home Essentials</a></li>
                  <li><a href="#">Photo Frames</a></li>
                  <li><a href="#">Vases</a></li>
                  <li><a href="#">Globes</a></li>
                  <li><a href="#">Bookend</a></li>
                  <li><a href="#">Wall Decor</a></li>
                </ul>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="products_category">
                <ul>
                  <li><a href="#">Decor Accents</a></li>
                  <li><a href="#">Ceramic Knobs</a></li>
                  <li><a href="#">Plant Stands</a></li>
                  <li><a href="#">Living Room</a></li>
                  <li><a href="#">Accent Table</a></li>
                  <li><a href="#">Pet Feeders</a></li>
                </ul>
            </div>
          </div>
        </div><!-- / inner row -->
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-self-center order_1">
        <div class="footer_logo">
          <a href="#"><img src="assets/images/logo.png" alt="logo"></a>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pd0 order_3 align-self-center">
        <div class="footer_heading">
          <h3>Need Help !</h3>
        </div>
        <div class="footer_info">
          <a href="tel:+918882227180"><i class="fa fa-phone"></i> <span>+91-888-222-7180</span></a>
          <a href="mailto:info@threebrotherssourcing.in"><i class="fa fa-envelope"></i> <span>info@threebrotherssourcing.in</span></a>
        </div>
        <div class="footer_social">
          <ul>
            <li><a href="#" target="blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" target="blank"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>
    </div><!-- /row -->
  </div>
</footer>

<section class="bottom_footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Copyright &copy; 2021. Three Brothers Sourcing.</p>
      </div>
    </div><!-- /row -->
  </div>
</section>




    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/snake.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
    <script type="text/javascript">
      jQuery(".product_slider").owlCarousel({
        autoplay: true,
        loop:true,
        rewind: false, /* use rewind if you don't want loop */
        margin: 20,
        center: true,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 800,
        nav: true,
        responsive: {
          0: {
            items: 2
          },

          600: {
            items: 3
          },

          1024: {
            items: 4
          },

          1366: {
            items: 5
          }
        }
      });
    </script>

<script type="text/javascript">

$(".snake").snakeify({
  speed:250
});

</script>
    <script type="text/javascript">
        window.onscroll = function (ev) {
            if (window.scrollY >= 10) {
              $("#mobile_nav").hide();
            }
          };
        $(document).ready(function(){
          $(".navbar-toggler-icon").click(function(){
            $("#mobile_nav").slideToggle();
          });
        });

    </script>
</body>

<script type="text/javascript">
    $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      $(".sticks").addClass("nav-sticky");
    } 
    else {
      $(".sticks").removeClass("nav-sticky");
    }
  });
</script>
<script>
    AOS.init({
        duration: 1200,
    })
</script>
<!-- scroll to top -->
<script type="text/javascript">
      $(window).scroll(function()
      {
        if($(window).scrollTop()> 300)
        {
          $("#top").fadeIn();
        }
        else
        {
          $("#top").fadeOut();
        }
      });
      $("#top").click(function(){
        $("html").animate({scrollTop:0},1000);
        })
    </script>
<!-- end scroll to top -->

<script type="text/javascript">
  baguetteBox.run('.ourgallery');
</script>
</html>