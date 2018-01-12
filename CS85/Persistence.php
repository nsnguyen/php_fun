<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>persistence demo</title>
	</head>
	
	<body>
	
		<h1>Persistence Demo</h1>
		<form action = "" method = "post">
			
<?php

//load up variables

$txtBoxCounter = filter_input(INPUT_POST, "txtBoxCounter");
$hdnCounter = filter_input(INPUT_POST, "hdnCounter");

//increment the counters
$txtBoxCounter++;
$hdnCounter++;

print <<< HERE
<fieldset>
<input type = "text"
		name = "txtBoxCounter"
		value = "$txtBoxVounter" />
		
<input type = "hidden"
		name = "hdnCounter"
		value = "$hdnCounter" />
		
<h3>The hidden value is $hdnCounter </h3>
<input type = "submit"
		name = "click to increment counters" />
		
HERE;

?>
</fieldset>
		</form>
	</body>
</html> 
