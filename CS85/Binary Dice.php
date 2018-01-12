<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang = "EN" dir = "ltr" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<title> Binary Dice</title>
	</head>
	<body>
		<h1>Binary Dice</h1>
		<h3>Demonstrates multiple if structure</h3>
		
		<?php
		
		$roll = rand(1,6);
		
		if ($roll == 1){
			$binValue = "001";
		} else if ($roll == 2){
			$binValue = "010";
		} else if ($roll == 3){
			$binValue = "011";
		} else if ($roll == 4){
			$binValue = "100";
		} else if ($roll == 5){
			$binValue = "101";
		} else if ($roll == 6){
			$binValue = "110";
		} else {
			print "I don't know that one...";
		}//end if
		
		print <<< HERE
		<p> You rolled a $roll</p>
		
		<p>
			In binary, that's $binValue.
		</p>
HERE;
?>

<p>
Refresh this page in the browser to roll another die.
</p>

	</body>
</html>
