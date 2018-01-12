<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Roll Em!</title>
	</head>
	
	<body>
		<h1>Roll Em!</h1>
		<h3>Demonstrates rolling a die</h3>
		
		<?php
		
		$roll = rand(1,6);
		
		print <<< HERE
		
		<p>You rolled a $roll.</p>
		<p>
			<img scr = "die$roll.jpg"
				 alt = "die: $roll" />
		</p>
HERE;
?>
	</body>
</html>

