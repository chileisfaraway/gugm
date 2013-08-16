<?php
	$score = $_POST['btn'];
    date_default_timezone_set('Europe/London');
    $name = $_POST['firstandlastname'];
    $ip=$_SERVER['REMOTE_ADDR'];
    $id = rand(1, 32555);

    $data = "scores.xml";
    $fh = fopen($data, 'a') or die("FileOpenFailed");
    $stringData = "\n".'<person>'."\n".'<name>'.$name.'</name>'."\n".'<score>'.$score.'</score>'."\n".'</person>';
    fwrite($fh, $stringData);
    fclose($fh);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href='./css/font/font.css' rel='stylesheet' type='text/css'>
    <link href='./css/universal.css' rel='stylesheet' type='text/css'>
    <link href='./css/result_style.css' rel='stylesheet' type='text/css'>
    <link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./js/script.js"></script>   
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <style type="text/css">
    #boxe	{
    	height:174px;
    	margin-top:-105px;
    }
    </style>
</head>

<body>
    <section id="heart"></section>
	<div id="boxe" style="text-align:center">
        <div id="cont">
        	<p class="title">Get Up Get Moving Quiz!</p>
			<h3>Score Submitted</h3>
			<a href="leaderboard.php" style="margin-top:8px;" class="btn btn-primary">Leaderboard!</a>
		</div>
	</div>
</body>
</html>
