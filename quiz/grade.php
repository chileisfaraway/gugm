<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $palmpre || $ipod || $berry == true) 
{ 
   echo "<script>window.location='http://quiz.benholloway.co.uk/submit.html'</script>";
}

$score = $_GET["score"];
$played = $_COOKIE["p"];
$name = $_COOKIE["n"];
$namelength = strlen($name);

if(empty($played)){
    $height = 232;
} else {
    $height = 250;
}

$truncated = substr($name, 0, 8) . '...';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Up Get Moving Quiz</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href='./css/font/font.css' rel='stylesheet' type='text/css'>
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
	<div id="boxe" style="text-align:center;height:<? echo $height; ?>px;">
        <div id="cont">
        <p class="title">Get Up Get Moving Quiz!</p>
		<h1>Results</h1>
    <? if(empty($played)){ ?>    
    <form action="post.php" method="POST" id="results">
        <button <? if ($score > -1 && $score < 8){}else{echo("disabled='disabled'");} ?> type="submit" name="btn" value="<? echo("$score") ?>" style='margin-top:26px;' class='btn btn-large btn-block 
                <? 
                if ($score > -1 && $score < 3){echo("btn-danger");}
                if ($score > 2 && $score < 6){echo("btn-warning");}
                if ($score > 5 && $score < 8){echo("btn-success");} 
                if ($score < 0 || $score > 7){echo("btn-inverse");}
                ?>' />
            <? if($score > -1 && $score < 8){echo("$score");}else{echo("Cheat");} ?> <? if($score > -1 && $score < 8){echo("/ 7 Correct");}else{}?>
        </button>
    </form>
        <span class='st_facebook_hcount' displayText='Facebook'></span>
        <span class='st_twitter_hcount' displayText='Tweet'></span>
	</div>
    <? } else {  ?>
    <button disabled="disabled" style='margin-top:26px;' class="btn btn-large btn-block btn-inverse">Sorry <? if($namelength > 7){echo $truncated;} else {echo $name;} ?></button>
    </br><p>You've already submitted a score in the last 2 minutes. Please wait.</p>
    <? } ?>
</div>

</body>

</html>