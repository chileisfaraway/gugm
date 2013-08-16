<?php include("head-tag.html"); ?>

</head>

  <body>

    <?php include("header.html"); ?>

    <div class="container-fluid flucon"><!-- .flucon USES @media is for adding padding when the window gets smaller or margins when it gets bigger-->
    <div class="row-fluid">
      <div class="span12">

        <iframe id="map-frame" src="maps.html" width="100%"></iframe>
        
      </div>
    </div>
  </div>

  <?php include("footer.html"); ?>
    <script>
    $(document).ready(function() {
        var bodyheight = $(document).height();
        $("#map-frame").height(bodyheight*0.65);
    });

    // for the window resize
    $(window).resize(function() {
        var bodyheight = $(document).height();
        $("#map-frame").height(bodyheight*0.65);
    });
  </script>
    </script>
  <?php include("preload_end_body.html"); ?>
  </body>
</html>
