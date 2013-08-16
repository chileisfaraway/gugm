<?php
$status = $_GET['type'];
if ($status=="keynote") {
	$download = "<p class='late'>DOWNLOAD THE QUIZ</p><a href='download/Healthy_Quiz.key'><button disabled='disabled' style='margin-top:23px' class='btn btn-large btn-block disabled' type='button'>Download</button></a>";
} else if ($status=="powerpoint") {
	$download = "<p class='late'>DOWNLOAD THE QUIZ</p><a href='download/Healthy_Quiz.ppsx'><button style='margin-top:23px' class='btn btn-large btn-primary btn-block' type='button'>Download</button></a>";
} else {
	$download = "<p class='late'>DOWNLOAD THE QUIZ, SELECT FORMAT</p>
				<a href='download.php?type=powerpoint'><img class='typ' src='css/ppt.png' width='57' height='57'></a>
				<a href='download.php?type=keynote'><img class='typ' src='css/keynote.png' width='57' height='57'></a>";
	$boxMargin = "-170px";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Get Up Get Moving Quiz</title>
	<link href='./css/font/font.css' rel='stylesheet' type='text/css'>
	<link href='./css/universal.css' rel='stylesheet' type='text/css'>
    <link href='./css/result_style.css' rel='stylesheet' type='text/css'>
    <link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
    #boxe	{
    	height:174px;
    	margin-top:-105px;
    }
    a {text-decoration:none!important;}
    .typ {margin-top:6px;margin-left:40px;}
    img{height:57px;width:57px;}
    </style>
</head>
<body>
	<a href="index.php"><section id="home"></section></a>
	<section id="heart"></section>
	<div id="boxe">
		<div id="cont">
			<p class="title"><b>Get Up Get Moving Quiz!</b></p>
			<? echo $download ?>
		</div>
	</div>
</body>
</html>