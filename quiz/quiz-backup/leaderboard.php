<?php
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
	$highscores = "<a href='quiz.php'><p class='try alert alert-success' data-dismiss='alert'>Hey! You Made it onto the Leaderboard! Well Done! Play Again?</p></a>";
} else if ($status=="fail") {
	$highscores = "<a href='quiz.php'><p class='try alert alert-error' data-dismiss='alert'>Sorry, you didn't make it onto the leaderboard. <b>Try Again?</b></p></a>";
} else {
	$highscores = "";
	$boxMargin = "-160px";
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<link href='./css/universal.css' rel='stylesheet' type='text/css'>
    <link href='./css/result_style.css' rel='stylesheet' type='text/css'>
    <link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
    #boxe	{
    	height:280px;
    	margin-top:<?php echo "$boxMargin"; ?>;
    }
    </style>
    <script type="text/javascript">
    	$(".alert").alert()
    </script>
</head>
<body>
	<a href="index.html"><img src="css/house.png" width="35" height="35" style="margin-top:10px;margin-left:15px;" /></a>
	<?php echo $highscores; ?>
	<section id="heart"></section>
	<div id="boxe">
		<div id="cont">
			<p style="padding-bottom:17px" class="title"><b>Get Up Get Moving Quiz!</b></p>
			<table style="font-size:14px" class="table table-striped"><?php echo $display; ?></table>
		</div>
	</div>
</body>
</html>