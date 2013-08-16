<?php include("head-tag.html"); ?>
</head>

  <body>
    <?php include("header.html"); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slides/1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Eat more Healthily</h1>
              <p class="lead small-hider">Eating a healthy diet improves your general health as well as decreasing your risk of medical problems.</p>
            </br>
              <a class="btn btn-large btn-primary button-small-hider" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slides/2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Get going this Summer</h1>
              <p class="lead small-hider">Are you ready to Get Going This Summer? Find loads of fun ideas, tips and tools. You can even get a free Personalised Activity Plan!</p>
            </br>
              <a class="btn btn-large btn-primary button-small-hider" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
         <img src="img/slides/3.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Get going events and offers</h1>
              <p class="lead small-hider">Looking for fun events and activities in your area? This summer, there will be hundreds of events nationwide. Come and join in the fun!</p>
            </br>
              <a class="btn btn-large btn-primary button-small-hider" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Summer!</h2>
          <p>Summer is a great time for us all to get active. The good news is that there's loads going on - free open days to celebrate the one year anniversary of the London 2012 Olympics, free local events for you and the kids and discounted sports club sessions. Simply use your postcode to find out what's going on near you and get going this summer.</p>
          </br>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Find Events Near You</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </br>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </br>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

      <?php include("footer.html"); ?>

    <script>
      $(document).ready(function () {

    //on load
    hideDiv();

    //on resize
    $(window).resize(function(){
        hideDiv();
    });

});
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery);

      function hideDiv(){
          if ($(window).width() < 650) {
                $(".small-hider").fadeOut("slow");
                $(".button-small-hider").removeClass( "btn-large" ).addClass( "pad-homecarousel" );
          }else{
                $(".small-hider").fadeIn("slow");
                $(".button-small-hider").addClass( "btn-large" ).removeClass( "pad-homecarousel" );
          }
      }
    </script>

      <?php include("preload_end_body.html"); ?>
  </body>
</html>
