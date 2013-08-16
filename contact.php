<?php include("head-tag.html"); ?>
</head>

  <body>

    <?php include("header.html"); ?>

    <div class="container-fluid flucon"><!-- .flucon USES @media is for adding padding when the window gets smaller or margins when it gets bigger-->
<form class="well span8">
    <h2 style="margin-top:-1px;padding-bottom:5px;">Contact Us!</h2>
    <div class="row">
        <div class="span3">
            <label>First Name</label>
            <input type="text" class="span3" placeholder="Your First Name">
            <label>Last Name</label>
            <input type="text" class="span3" placeholder="Your Last Name">
            <label>Email Address</label>
            <input type="text" class="span3" placeholder="Your email address">
            <label>Subject</label>
            <select id="subject" name="subject" class="span3">
                <option value="na" selected="">Getting involved!</option>
                <option value="service">Contact a nutritionist</option>
                <option value="suggestions">Contact a dietitian</option>
                <option value="product">General support</option>
            </select>
        </div>
        <div class="span5">
            <label>Message</label>
            <textarea style="resize:vertical" name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary pull-right">Send</button>
    </div>
</form>
    </div>

  <?php include("footer.html"); ?>
  <?php include("preload_end_body.html"); ?>
  </body>
</html>
