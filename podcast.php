<?php
$number = rand(1,3);
?>

  <?php include("head-tag.html"); ?>
    <script src="audiojs/audio.min.js"></script>
    <script>
      audiojs.events.ready(function() {
        var as = audiojs.createAll();
      });
    </script>
    <style>
    body{
      background-image:url('img/slides/<?php echo $number; ?>.jpg'); 
      background-size:cover;
      background-repeat:no-repeat;
      background-position:center; 
      background-attachment:fixed;
    }
    </style>
    
  </head>

  <body>

  <?php include("header.html"); ?>

  <div id="audio-player">
    <p class="lead listen">Listen to the Podcast</p>
    <audio src="repo/sample.mp3" preload="auto" />
  </div>

  <div id="download-podcast">
    <a href="repo/sample_audio.zip" class="btn"><i class="icon-download-alt"></i> Download</a>
  </div>

  <?php include("footer.html"); ?>
  <?php include("preload_end_body.html"); ?>
  </body>
</html>
