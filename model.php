<?php include("head-tag.html"); $number = rand(1,3); ?>

<style>
    body{
      background-image:url('img/slides/<?php echo $number; ?>.jpg'); 
      background-size:cover;
      background-repeat:no-repeat;
      background-position:center; 
      background-attachment:fixed;
    }
    #download {
      top:50%;left:50%;
      width:274px;
      height:44px;
      position:absolute;
      margin:-22px 0px 0px -138px;
    }
    </style>
</head>

  <body>

    <?php include("header.html"); ?>

    <div class="container-fluid flucon"><!-- .flucon USES @media is for adding padding when the window gets smaller or margins when it gets bigger-->
    <div class="row-fluid">
      <div id="download" class="span12">
        <img src="img/spreadsheet-icon.png" width="44" height="44" alt="Spreadsheet" />
        <a href="#" class="btn btn-large btn-success">Download Spreadsheet</a>
      </div>
    </div>
  </div>

  <?php include("footer.html"); ?>
  <?php include("preload_end_body.html"); ?>
  </body>
</html>
