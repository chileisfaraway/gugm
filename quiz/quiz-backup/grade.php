<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href='./css/universal.css' rel='stylesheet' type='text/css'>
    <link href='./css/result_style.css' rel='stylesheet' type='text/css'>
    <link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./js/script.js"></script>   
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ur-1f7dce57-e64e-aca5-2972-f39237921dca"});</script>
</head>

<body>
    <section id="heart"></section>
	<div id="boxe" style="text-align:center">
        <div id="cont">
        <p class="title">Get Up Get Moving Quiz!</p>
		<h1>Results</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "D") { $totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
        ?>
        
    <form action="post.php" method="POST" id="results">
        <button type="submit" name="btn" value="<? echo("$totalCorrect") ?>" style='margin-top:26px;' class='btn btn-large btn-block 
                <? if ($totalCorrect > -1 && $totalCorrect < 4){echo("btn-danger");}
                if ($totalCorrect > 3 && $totalCorrect < 6){echo("btn-warning");}
                if ($totalCorrect > 5){echo("btn-success");} ?>' />
            <? echo("$totalCorrect") ?> / 7 Correct
        </button>
    </form>
        <span class='st_facebook_hcount' displayText='Facebook'></span>
        <span class='st_twitter_hcount' displayText='Tweet'></span>
	</div>
</div>

</body>

</html>