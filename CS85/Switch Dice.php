<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<http lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Switch Dice</title>
	</head>
	<body>
		<h1>SwitchDice</h1>
		<h3>Demonstrates switch structure</h3>
		
		<?php
		
		$roll = rand(1,6);
		
		switch ($roll){
			case 1:
				$romValue = "I";
				break;
			case 2:
				$romValue = "II";
				break;
			case 3:
				$romValue = "III";
				break;
			case 4:
				$romValue = "IV";
				break;
			case 5:
				$romValue = "V";
				break;
			case 6:
				$romValue = "VI";
				break;
			default:
				print "This is an illegal die!";
		}//end switch
	
	print <<< HERE
<p> You rolled a $roll.</p>

<p> In Roman numerals. That's $romValue.

HERE;
?>
<p>
Refresh this page in the browser to roll another die.
</p>
		</body>
</http>
