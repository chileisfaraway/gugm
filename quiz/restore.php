<?
$status = "restored";
file_put_contents('scores.txt', "John Smith,Miranda Hart,Ben Holloway,Tom Harrington,Elizabeth Gaines,David Estes::7,7,5,5,4,3");
header("Location: index.php?rest=".$status);
?>