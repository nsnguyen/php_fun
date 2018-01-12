<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>>checkDemo.php</title>
	</head>
	
	<body>
		<?php
		$total = 0;
		
		if (filter_has_var(INPUT_POST, "chkFries")){
			print "<p>You wanted fries</p> \n";
			$total += filter_input(INPUT_POST, "chkFries");
		}
		
		if (filter_has_var(INPUT_POST, "chkSoda")){
			print "<p>You wanted a soda</p> \n";
			$total += filter_input(INPUT_POST, "chkSoda");
		}
		
		if (filter_has_var(INPUT_POST, "chkShake")){
			print "<p>You wanted a shake</p> \n";
			$total += filter_input(INPUT_POST, "chkShake");
		}
		
		if (filter_has_var(INPUT_POST, "chkKetchup")){
			print "<p>You wanted ketchup</p> \n";
			$total += filter_input(INPUT_POST, "chkKetchup");
		}
		
		print "<p>The total cost is: \$$total</p> \n";
?>
	</body>
</html>
