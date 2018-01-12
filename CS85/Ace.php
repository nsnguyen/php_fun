<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Ace!</title>
	</head>
	
	<body>
		<h1>Ace!</h1>
		<h3>Demonstrates if statement</h3>
		
	<div>
		<?php
		$roll = rand(1,6);
		print "You rolled a $roll";
		if ($roll ==1) {
			print "<h1>That's an ace!!!!!</h1>";
		} //end if
		
		print "<br />";
?>
	</div>
	<p>
		Refresh this page in the browser to roll another die.
	</p>
	</body>
</html>
