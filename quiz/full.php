<? 
$status = $_GET['status'];

$status = $_GET['status'];
if ($status=="restored") {
	$restore = "<a href='index.php'><p style='padding:10px;text-align:center;width:170px;margin:auto;margin-top:30px;' class='try alert alert-success'>Leaderboard Restored!</p></a>";
}   else {
	$restore = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
	 __  __           __        __              __   __     __  
	|__)|_ |\ |  |__|/  \|  |  /  \|  | /\\_/    _) /  \ /|  _) 
	|__)|__| \|  |  |\__/|__|__\__/|/\|/--\|    /__ \__/  | __)                                                             

	-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link href='./css/universal.css' rel='stylesheet' type='text/css'>
	<link href='./css/style.css' rel='stylesheet' type='text/css'>
	<link href='./css/font/font.css' rel='stylesheet' type='text/css'>
	<link href='./css/animate.css' rel='stylesheet' type='text/css'>
	<link href='./css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<noscript>
		For full functionality of this site it is necessary to enable JavaScript.
		Here are the <a href="http://www.enable-javascript.com/" target="_blank">
		instructions how to enable JavaScript in your web browser</a>.
	</noscript>
</head>

<body>
	<? echo $restore; ?>
	<section id="heart"></section>
	<div id="boxe">
		<div id="cont">
			<p class="title"><b>Get Up Get Moving Quiz!</b></p>
			<p class="para">
				Take the Get up Get Moving Quiz and find out whether you&#39;re an Olympic athlete or a couch potato compared to everyone else.
				Read the question and click the answer that you think is right. Also it&#39;s best to play this Quiz on A webkit browser, e.g Chrome. You <b>must</b> have Javascript <a target="_blank" href="http://enable-javascript.com/">enabled</a>
				You get one point per correct answer. To advance to the next question use the arrows or pill buttons. Or go to the <a href="leaderboard.php">leaderboard.</a>
			</p>
		</div>
		<div id="block">
			<!-- Button to trigger modal -->
			<a href="#myModal" role="button" class="btn btn-default btn-block btn-primary" data-toggle="modal">Play!</a>
		</div>
	</div>

		<!-- Modal -->
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Notification</button>
	    <h3 id="myModalLabel">Disclaimer</h3>
	  	</div>
	  	<div class="modal-body">
	    	<p>
	    		This Get up Get Moving Quiz and it's data are property of Wymondham High Academy. It was built in 2012/2013 and all data and information inside of the quiz is static and will not update. None of the data should be used for medical purposes such as dieting, please consult a doctor or a nutritionist for information. This quiz is for fun and is not a real life representation of how healthy you actually are. Much of the statistics generated for the purpose of this quiz are calculated by taking an average from different websites.
	    		</br></br>
	    		Get up Get Moving claims no liability for any harm caused by using information in this quiz. Please contact <a href="mailto:getupgetmoving@holloway.gb.com">Get Up Get Moving</a> for more information about this quiz and the statistics behind it.
	    	</p>
	  	</div>
	  	<div class="modal-footer">
	    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Decline</button>
	    <button class="btn btn-success" onClick="parent.location='quiz.php'">Accept</button>
	 	</div>
</div>
</body>
</html>