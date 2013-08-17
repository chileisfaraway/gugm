<?php
	$score = $_POST['btn'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='./css/font/font.css' rel='stylesheet' type='text/css'>
    <link href='./css/universal.css' rel='stylesheet' type='text/css'>
    <link href='./css/result_style.css' rel='stylesheet' type='text/css'>
    <link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
    #boxe	{
    	height:214px;
    	margin-top:-125px;
    }
    </style>
</head>

<body>
    <a href="index.php"><section id="home"></section></a>
    <section id="heart"></section>
	<div id="boxe" style="text-align:center">
        <div id="cont">
        	<p class="title">Get Up Get Moving Quiz!</p>
			<h2>Submit Score</h2>
			<form action="write.php" method="POST" id="results">
				<input style="margin-top:12px;" name="firstandlastname" type="text" placeholder="Full Name" required="required">
                    <button type="submit" name="btn" value="<? echo("$score") ?>" style='margin-top:2px' class='btn btn-primary' />
                		Submit
           			</button>
                    <button onClick="parent.location='leaderboard.php'" style='margin-top:2px' class='btn btn-primary' />
                        Skip
                    </button>
                </form>
		</div>
	</div>
</body>
</html>
