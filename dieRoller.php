<!DOCTYPE html>



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
