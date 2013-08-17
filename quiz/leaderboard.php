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
	$highscores = "<a href='quiz.php'><p class='try alert alert-success' data-dismiss='alert'>Hey! Great score, you're obviously very healthy. Play Again?</p></a>";
} else if ($status=="fail") {
	$highscores = "<a href='quiz.php'><p class='try alert alert-error' data-dismiss='alert'>Hmm, you really need to brush up on your health knowledge. <b>Try Again?</b></p></a>";
} else {
	$highscores = "";
	$boxMargin = "-170px";
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<link href='./css/font/font.css' rel='stylesheet' type='text/css'>
	<link href='./css/universal.css' rel='stylesheet' type='text/css'>
    <link href='./css/result_style.css' rel='stylesheet' type='text/css'>
    <link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
    #boxe	{
    	height:310px;
    	margin-top:<?php echo "$boxMargin"; ?>;
    }
    </style>
    <script type="text/javascript">
    	$(".alert").alert()
    </script>
</head>
<body>
	<a href="index.php"><section id="home"></section></a>
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