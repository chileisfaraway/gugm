<?php include("head-tag.html"); ?>
</head>

  <body>

  <?php include("header.html"); ?>

  <div class="container-fluid flucon"><!-- .flucon USES @media is for adding padding when the window gets smaller or margins when it gets bigger-->
  
  <div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Sorry!</strong> We currently don't have that item in stock. Please check back later.
  </div>

    <div class="row-fluid shop-items">
      <div class="span3 well paddimg">
        <img src="img/products/1.jpg" class="img-polaroid" alt="Arm Band" />
        </br>
        <h4>Generic iPod Arm Band</h4>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum tristique purus eget condimentum. Cras euismod, dui ut eleifend ullamcorper, libero diam sollicitudin lacus, quis laoreet erat urna non quam. Praesent a justo libero. Mauris malesuada libero vel lorem porttitor, vel tincidunt felis cursus.
        </br></br>
        <div>
          <span class="badge badge-inverse pull-left">£10.99</span>
          <span class="badge badge-success pull-right purchase">Buy now!</span>
        </br>
        </div>
      </div>  
      
      <div class="span3 well paddimg">
        <img src="img/products/2.jpg" class="img-polaroid" alt="Jawbone Up" />
        </br>
        <h4>Jawbone Up</h4>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum tristique purus eget condimentum. Cras euismod, dui ut eleifend ullamcorper, libero diam sollicitudin lacus, quis laoreet erat urna non quam. Praesent a justo libero. Mauris malesuada libero vel lorem porttitor, vel tincidunt felis cursus.
        </br></br>
        <div>
          <span class="badge badge-inverse pull-left">£120.46</span>
          <span class="badge badge-success pull-right purchase">Buy now!</span>
        </br>
        </div>
      </div>  

      <div class="span3 well paddimg">
        <img src="img/products/3.jpg" class="img-polaroid" alt="Trainers" />
        </br>
        <h4>Nike 'Lift' Trainers</h4>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum tristique purus eget condimentum. Cras euismod, dui ut eleifend ullamcorper, libero diam sollicitudin lacus, quis laoreet erat urna non quam. Praesent a justo libero. Mauris malesuada libero vel lorem porttitor, vel tincidunt felis cursus.
        </br></br>
        <div>
          <span class="badge badge-inverse pull-left">£44.50</span>
          <span class="badge badge-success pull-right purchase">Buy now!</span>
        </br>
        </div>
      </div>

      <div class="span3 well paddimg">
        <img src="img/products/4.jpg" class="img-polaroid" alt="Nike Fuel Band" />
        </br>
        <h4>Nike Fuel Band</h4>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum tristique purus eget condimentum. Cras euismod, dui ut eleifend ullamcorper, libero diam sollicitudin lacus, quis laoreet erat urna non quam. Praesent a justo libero. Mauris malesuada libero vel lorem porttitor, vel tincidunt felis cursus.
        </br></br>
        <div>
          <span class="badge badge-inverse pull-left">£100.00</span>
          <span class="badge badge-success pull-right purchase">Buy now!</span>
        </br>
        </div>
      </div>  
    </div>

  </div>

  <?php include("footer.html"); ?>

  <script>
  function hideDiv(){
      if (($(window).width() > 766) && ($(window).width() < 976)) {
            $(".purchase").css("margin-top","10px");
      }else{
            $(".purchase").css("margin-top","0px");
      }
  }

  $(document).ready(function() {
    $('.alert').hide();
    //on load
    hideDiv();
    //on resize
    $(window).resize(function(){
        hideDiv();
    });
  });

  $('.close').click(function() {
    $('.alert').hide('fast');
  });

  $('.purchase').click(function(){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $('.alert').delay(1100).show('slow').delay(4100).hide('fast');
  });
    </script>

  <?php include("preload_end_body.html"); ?>
  </body>
</html>
