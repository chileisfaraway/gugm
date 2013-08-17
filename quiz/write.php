<?php
$uScore = $_POST['btn'];
$uName = $_POST['firstandlastname'];

$firstName = $uName;
$nameArray = explode(' ',trim($firstName));
$nameHandle = $nameArray[0];

setcookie('n', $nameHandle, time()+5000);
setcookie('p', 1, time()+5000);

if($uScore < 7)	{
setcookie('s', $uScore, time()+5000);
}

$fileContents = file_get_contents("scores.txt");
$namesList = reset(explode("::", $fileContents));
$scoresList = end(explode("::", $fileContents));
$nArr = explode(",", $namesList);
$sArr = explode(",", $scoresList);

if ($uScore > 4){
	$status = "success";
}

if ($uScore < 5){
	$status = "fail";
}

if ($numScoreToWrite!="") {
	if ($numberOfScores<5) {
		array_push($sArr, $uScore);
		array_push($nArr, $uName);
	} 
} else {
	if ($numScoreToWrite==0) {
		array_unshift($sArr, $uScore);
		array_unshift($nArr, $uName);
	} else {
		array_splice($sArr, $numScoreToWrite-1, 0, $uScore);
		array_splice($nArr, $numScoreToWrite-1, 0, $uName);
	}
}

$toWrite = implode(",", $nArr) . "::" . implode(",", $sArr);

file_put_contents("scores.txt", $toWrite);

header("Location: leaderboard.php?status=".$status);
?>