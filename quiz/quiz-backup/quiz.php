<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link href='./css/universal.css' rel='stylesheet' type='text/css'>
	<link href='./css/quiz_style.css' rel='stylesheet' type='text/css'>
	<link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="./js/script.js"></script>	
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>	
	<style>
	.again	{padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:17px;}
	<?php if($_COOKIE["p"] > 0){echo("#total{margin-top:-25px;}");} ?>
	</style>
	<script type="text/javascript">
	function deleteAllCookies() {
        var cookies = document.cookie.split(";");

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
        location.reload();
    }
    </script>
</head>

<body>
	<a href="index.html"><img src="css/house.png" width="35" height="35" style="margin-top:2px;margin-left:15px;position:absolute;" /></a>
	<header>
		<p>Get Up Get Moving Quiz!</p>
	</header>

	<?php if($_COOKIE["p"] > 0){ ?>
	<p class='again alert alert-info'>Back again <?php echo $_COOKIE["n"];?>? You've got to beat <?php echo $_COOKIE["s"];?> this time. <a href="#" onClick="deleteAllCookies()">Not <?php echo $_COOKIE["n"];?>?</a></p>
	</br><? } ?>
	<form action="grade.php" method="post" id="quiz">

<section id="total">
	<section id="content">
		<p>What does BMI Stand for?</p>
			<label class="radio">
  			<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
  			Body Mass Index
			</label>

			<label class="radio">
  			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B">
  			By Moderating Intake
			</label>

			<label class="radio">
  			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C">
  			Biggest Medical Indicator
			</label>

			<label class="radio">
  			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D">
  			B-Vitamin Modulating Intravenous
			</label>
	</section>

	<section id="content">
		<p>How many calories should Men/Women eat a day?</p>
			<label class="radio">
  			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A">
  			1000 (Men) and 980 (Women)
			</label>

			<label class="radio">
  			<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B">
  			6000 for Men and Women
			</label>

			<label class="radio">
  			<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C">
  			5500 (Men) and 5750 (Women)
			</label>

			<label class="radio">
  			<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D">
  			2200 (Men) and 2100 (Women)
			</label>
	</section>

	<section id="content">
		<p>1 Calorie = ... Joules?</p>
			<label class="radio">
  			<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A">
  			6kj (kj = Kilojoules)
			</label>

			<label class="radio">
  			<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B">
  			8.2gj (gj = Gigajoules)
			</label>

			<label class="radio">
  			<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C">
  			4.2kj (kj = Kilojoules)
			</label>

			<label class="radio">
  			<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D">
  			9j (j = Joules)
			</label>
	</section>

	<section id="content">
		<p>How Many Fruit and</br>Vegetables should you</br>have a day?</p>
		<section class="radio-center">
			<label class="radio">
  			<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A">
  			7
			</label>

			<label class="radio">
  			<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B">
  			6
			</label>

			<label class="radio">
  			<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C">
  			5
			</label>

			<label class="radio">
  			<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D">
  			4
			</label>
		</section>
	</section>

	<section id="content">
		<p>Which one has the most Calories?</p>
			<label class="radio">
  			<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A">
  			Starbucks Hot Chocolate
			</label>

			<label class="radio">
  			<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B">
  			Big Mac
			</label>

			<label class="radio">
  			<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C">
  			Cadburys Mini Roll
			</label>

			<label class="radio">
  			<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D">
  			Tea &amp; Two Sugars
			</label>
	</section>

	<section id="content">
		<p>How many minutes of</br>exercise do adults</br>need a day?</p>
			<label class="radio">
  			<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A">
  			20 minutes (&frac13; hour)
			</label>

			<label class="radio">
  			<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B">
  			60 minutes (1 hour)
			</label>

			<label class="radio">
  			<input type="radio" name="question-6-answers" id="question-6-answers-C" value="C">
  			120 minutes (2 hours)
			</label>

			<label class="radio">
  			<input type="radio" name="question-6-answers" id="question-6-answers-D" value="D">
  			30 minutes (&frac12; hour)
			</label>
	</section>

	<section id="content">
		<p>How many days a week do</br>they need to do this?</p>
			<label class="radio">
  			<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A">
  			7 days a week (Every day)
			</label>

			<label class="radio">
  			<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B">
  			5 days a week
			</label>

			<label class="radio">
  			<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C">
  			6 days a week
			</label>

			<label class="radio">
  			<input type="radio" name="question-7-answers" id="question-7-answers-D" value="D">
  			1 day a week
			</label>
	</section>
</section>

	<section id="submit">
		<input class="btn btn-primary btn-large" type="submit" value="Submit Quiz" />
	</section>

	<footer>
		<p>&copy; Get Up Get Moving 2013</p>
	</footer>
</body>
</html>