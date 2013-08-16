<?php include("head-tag.html"); ?>
</head>

  <body>

    <?php include("header.html"); ?>

    <div class="container-fluid flucon"><!-- .flucon USES @media is for adding padding when the window gets smaller or margins when it gets bigger-->
        <form class="form-horizontal">
                                <div class="heading">
                                    <h4 style="margin-left:180px;padding-bottom:15px;" class="form-heading">Sign Up</h4>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputCompanyName">Company Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputCompanyName" placeholder="E.g. Holloway Inc.">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputFirst">First Name<span style="color:red"> *</span></label>
                                    <div class="controls">
                                        <input type="text" id="inputFirst" placeholder="E.g. John">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputLast">Last Name<span style="color:red"> *</span></label>
                                    <div class="controls">
                                        <input type="text" id="inputLast" placeholder="E.g. Holloway">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email<span style="color:red"> *</span></label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" placeholder="E.g. john@sample.com">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputUser">Username<span style="color:red"> *</span></label>
                                    <div class="controls">
                                        <input type="text" id="inputUser" placeholder="E.g. jholloway">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password<span style="color:red"> *</span></label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Min. 8 Characters">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox"> I agree all your <a href="#">Terms of Services<span style="color:red"> *</span></a>
                                        </label>
                                    </br>
                                        <button type="button" class="btn btn-success submit">Sign Up</button>
                                        <button type="button" class="btn">Help</button>
                                    </div>
                                </div>  
                                <div id="confirmed" class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Confirmation: </strong> A confirmation email has been sent to your email.<br>
                                    Thank you for your registration.
                                </div>
                            </form> 
    </div>

  <?php include("footer.html"); ?>
      <script>
      var url = "get-involved.php";

      $(document).ready(function() {
        $('#confirmed').hide();
      });

      $('.submit').click(function(){
        $('#confirmed').show('fast');
      });

      $('.close').click(function() {
        $('#confirmed').hide();
      });
      </script>
  <?php include("preload_end_body.html"); ?>
  </body>
</html>
