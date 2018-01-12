<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<title>petals.php</title>
		<link rel = "stylesheet"
				type = "text/css"
				href = "petals.css" />
	<body>
		<h1> Petals Around the rose</h1>
<?php

printGreeting();
printDice();
printForm();

//$numPetals = filter_input(INPUT_POST,"numPetals");

function printGreeting(){
	global $numPetals;
	$guess = filter_input(INPUT_POST, "guess");
	$numPetals = filter_input(INPUT_POST, "numPetals");
	
	if(!filter_has_var(INPUT_POST, "guess")){
		print"<h3>Welcome to Petals Around the Rose</h3>";
	} else if ($guess == $numPetals){
		print "<h3>You Got It!</h3>";
	} else {
print <<< HERE
		<h3>from last try:</h3>
		<p>
		you guessed: $guess
		</p>
		<p>
		-and the correct answer was: $numPetals petals around the rose
		</p>
HERE;

	} //end if
} //end printGreeting

function showDie($value){
	print <<< HERE
	<img scr = "die$value.jpg"
			height = "100"
			width = "100"
			alt = "die: $value" />
HERE;
} //end showDie

function printDice(){
	global $numPetals;
	
	print "<h3>New Roll:</h3> \n";
	$numPetals = 0;
	
	$die1 = rand(1,6);
	$die2 = rand(1,6);
	$die3 = rand(1,6);
	$die4 = rand(1,6);
	$die5 = rand(1,6);
	
	print "<p> \n";
	showDie($die1);
	showDie($die2);
	showDie($die3);
	showDie($die4);
	showDie($die5);
	print "<p> \n";
	
	calcNumPetals($die1);
	calcNumPetals($die2);
	calcNumPetals($die3);
	calcNumPetals($die4);
	calcNumPetals($die5);
	
} //end printDice

function calcNumPetals($value){
	global $numPetals;
	
	switch ($value){
		case 3:
			$numPetals += 2;
			break;
		case 5:
			$numPetals += 4;
			break;
			
	} //end switch
}// end calcNumPetals

function printForm(){
	global $numPetals;
	
	print <<< HERE
	<h3> How many petals around the rose? </h3>
	
	<form action = ""
			method = "post">
		<fieldset>
	<input type = "text"
			name = "numPetals"
			value = "$numPetals" />
	<br />
	<input type = "submit" />
	</fieldset>
	</form>
	<p>
		<a href = "petalHelp.html">
		give me a hint </a>
	</p>
HERE;
		} //end print Form

?>
	</body>
	</head>
</html>
