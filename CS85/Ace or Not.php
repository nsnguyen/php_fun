<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Ace or Not</title>
	</head>
	<body>
		<h1>Ace or Not</h1>
		<h3>Demonstrates if statement with else clause</h3>
		<div>
			
			<?php
			$roll = rand(1,6);
			print "<p>You rolled a $roll</p> \n";
			
			if ($roll ==1){
				print "<h1>That's an ace!!!</h1>";
			}else {
				print "<p>That's not an ace...</p>";
			} //end if
			?>
			
			<p>Refresh this page in the browser to roll another die</p>
		</div>
	</body>
</html>
