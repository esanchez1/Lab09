
<html>
<head>
<style type="text/css">
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
}
</style>
</head>

<body bgcolor="#e1e1e1">

<div id="wrapper">

<center><font face="Andalus" size="5">Your Score</font></center>
<br />
<br />

<?php
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$answer4= $_POST['answerFour'];
	$answer5= $_POST['answerFive'];
	$score = 0;
	
	if ($answer1 == "A"){
		$score++;
	}
	if ($answer2 == "B"){
		$score++;
	}
	if ($answer3 == "C"){
		$score++;
	}
	if ($answer4 == "A"){
		$score++;
	}
	if ($answer5 == "B"){
		$score++;
	}

	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/5</font></center>";
	
?>




</div>

</body>
</html>