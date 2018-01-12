<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="EN" dir ="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>die Roller</title>
	<link rel = "stylesheet"
			type = "text/css"
			href = "dieRoller.css"
			
</head>

<body>
<fieldset>	
	<label>How many sides? </label>
	
<?php
	
	$page = filter_input(INPUT_POST, "error");
	$numSide = filter_input(INPUT_POST, "numSide");
		$die = rand(0, $numSide);

if($numSide == 0){
		echo 'You must enter a number higher than 0';
}else{	echo "You roll $die";}
	
?>	

<form action = ""
		method = "post">

	<input type = "text"
			name = "numSide" />
	<input type = "submit"  value = "submit"/>	

</form>
</fieldset>	
</body>
</html>
