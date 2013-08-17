<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $palmpre || $ipod || $berry == true) 
{ 
   echo "<script>window.location='http://quiz.benholloway.co.uk/mobile'</script>";
}

$fileContents = file_get_contents("scores.txt");

$namesList = reset(explode("::", $fileContents));
$scoresList = end(explode("::", $fileContents));
$nArr = explode(",", $namesList);
$sArr = explode(",", $scoresList);

$display = "";
for ($i=1; $i<=5; $i++) {
	$display .= "<tr><td>" . $i . ')' . "</td><td>" . $nArr[$i-1] . "</td><td>" . $sArr[$i-1] . "</td></tr>";
}

$status = $_GET['status'];
if ($status=="success") {
	$highscores = "<p class='try alert alert-success' data-dismiss='alert'>Hey! Great score, you're obviously very healthy.</p>";
} else if ($status=="fail") {
	$highscores = "<p class='try alert alert-error' data-dismiss='alert'>Hmm, you really need to brush up on your health knowledge.</p>";
} else {
	$highscores = "";
	$boxMargin = "-170px";
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Get Up Get Moving Quiz</title>
	<link href='./css/font/font.css' rel='stylesheet' type='text/css'>
	<link href='./css/universal.css' rel='stylesheet' type='text/css'>
    <link href='./css/result_style.css' rel='stylesheet' type='text/css'>
    <link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
    #boxe	{
    	height:310px;
    	margin-top:<?php echo "$boxMargin"; ?>;
    }
    #menu {
    	position:absolute;
    	left:6px;
    }
    #menu a {
    	margin:6px 0px 0px 0px;
    	left:0;
    }
    #menuopt {
    	position:absolute;
    	right:6px;
    }
    #menuopt a {
		margin:6px 0px 0px 0px;
    	right:0;
    }
    span {
    	display:block!important;
    }
    .icon-writing {
    	padding-right:6px;
    }
    </style>
    <script type="text/javascript">
    	$(".alert").alert()
    </script>
</head>
<body>
	<div id="menu">
		<span><a href="../index.php" class="btn btn-small btn-inverse"><i class="icon-home icon-white icon-writing"></i> Home</a></span>
		<span><a href="../information.php" class="btn btn-small btn-inverse"><i class="icon-search icon-white icon-writing"></i> Information</a></span>
		<span><a href="../get-involved.php" class="btn btn-small btn-inverse"><i class="icon-check icon-white icon-writing"></i> How to get involved</a></span>
		<span><a href="../shop.php" class="btn btn-small btn-inverse"><i class="icon-shopping-cart icon-white icon-writing"></i> Shop</a></span>	
		<span><a href="#" class="btn btn-small btn-inverse"><i class="icon-pencil icon-white icon-writing"></i> Quiz</a></span>			
		<span><a href="../podcast.php" class="btn btn-small btn-inverse"><i class="icon-headphones icon-white icon-writing"></i> Podcast</a></span>		
		<span><a href="../model.php" class="btn btn-small btn-inverse"><i class="icon-th-list icon-white icon-writing"></i> Model</a></span>		
		<span><a href="../events.php" class="btn btn-small btn-inverse"><i class="icon-map-marker icon-white icon-writing"></i> Events</a></span>		
	</div>

	<div id="menuopt">
		<span><a href="full.php" class="btn btn-inverse"><i class="icon-forward icon-white icon-writing"></i> Play Full Game</a></span>
		<span><a href="download.php" class="btn btn-inverse"><i class="icon-download icon-white icon-writing"></i> Downloadable</a></span>
	</div>

	<a href="index.php"><section id="refresh"></section></a>
	<a href="download.php"><section id="download"></section></a>
	<?php echo $highscores; ?>
	<section id="heart"></section>
	<div id="boxe">
		<div id="cont">
			<p class="title"><b>Get Up Get Moving Quiz!</b></p>
			<p class="late">LATEST RESULTS</p>
			<table style="font-size:14px;margin-top:20px;" class="table table-striped"><?php echo $display; ?></table>
		</div>
	</div>
</body>
</html>