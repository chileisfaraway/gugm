<?php
date_default_timezone_set('Europe/London');
$name = $_POST['firstandlastname'];
$score = $_POST['score'];
$nil = "nil";
$id = rand(1, 32555);
$comma = ", ";
$ip=$_SERVER['REMOTE_ADDR'];

$data = "../data.txt";
$fh = fopen($data, 'a') or die("FileOpenFailed");
$stringData = '<section id="'.$id.'"class="btn btn-primary scoreresult"><p class="name">'.$name.'</p><p class="score">'.$score.'</p></section>'."\n";
fwrite($fh, $stringData);
fclose($fh);

$mobiledata = "./data.txt";
$fh = fopen($mobiledata, 'a') or die("FileOpenFailed");
$stringDataMobile = '<p id="'.$id.'">'.$name.$comma.$score.'</p>'."\n";
fwrite($fh, $stringDataMobile);
fclose($fh);

$today = date("D M j G:i:s T Y");
$record = "../record.txt";
$fh = fopen($record, 'a') or die("FileOpenFailed");
$stringrecord = $name.$comma.$score.$comma.$id."\n".$today."\n"."IP Address: ".$ip."\n".'Device: Mobile'."\n"."\n";
fwrite($fh, $stringrecord);
fclose($fh);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.js">
        </script>
        <script src="my.js">
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header" data-position="fixed">
                <h3>
                    Get up Get Moving
                </h3>
            </div>
            <div data-role="content">
                <div style="text-align:center">
                    <p>
                        <span style="font-size: medium; " data-mce-style="font-size: medium;">
                            Thank you <? echo($name); ?>
                        </span>
                    </p>
                    <p>
                        <span style="font-size: medium; " data-mce-style="font-size: medium;">
                            Your score was: <? echo($score); ?>
                        </span>
                    </p>
                    <p>
                        <span style="font-size: medium; " data-mce-style="font-size: medium;">
                            Your score was <?php
                                            if($score==0){
                                                echo("was Atrocious!");
                                            }   
                                            if($score==1){
                                                echo("was Terrible!");
                                            }
                                            if($score==2){
                                                echo("wasn't too Bad...");
                                            }
                                            if($score==3){
                                                echo("was Ok");
                                            }
                                            if($score==4){
                                                echo("was Adequate");
                                            }
                                            if($score==5){
                                                echo("was Good");
                                            }
                                            if($score==6){
                                                echo("was Very Good");
                                            }
                                            if($score==7){
                                                echo("was Amazing!");
                                            }
                                            ?>
                        </span>
                    </p>
                </div>
            </div>
            <div data-role="tabbar" data-iconpos="left" data-theme="a">
                <ul>
                    <li>
                        <a href="./index.php" data-theme="" data-icon="home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="./mobile-submit" data-theme="" data-icon="star">
                            Submit Score
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>