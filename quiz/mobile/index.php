<?php
$fileContents = file_get_contents("../scores.txt");

$namesList = reset(explode("::", $fileContents));
$scoresList = end(explode("::", $fileContents));
$nArr = explode(",", $namesList);
$sArr = explode(",", $scoresList);

$display = "";
for ($i=1; $i<=5; $i++) {
    $display .= "<tr><td> " . $i . ')&nbsp;' . "</td><td> " . $nArr[$i-1] . ",</td><td> " . $sArr[$i-1] . "</td></tr><br><br>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Get Up Get Moving Quiz</title>
        <meta charset="utf-8" />
        <link href='style.css' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
    </head>
    <body>
        <!-- Home -->
        <div>
            <div>
                <span class="ui-title">
                </span>
                <div>
                    <p class="title">
                        <b>
                            GET UP GET MOVING
                        </b>
                    </p>
                </div>
            </div>
            <div>
                <div class="list">
                   <?php echo $display; ?>
                </div>
            </div>
            <div>
                <a class="home" href="#">
                    HOME
                </a>
                <a class="score" href="./submit.html">
                    SUBMIT SCORE
                </a>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>