<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Your output</title>
	</head>
	
	<body>
		<h1>Your Output</h1>
		<div style = "text-align: center">
			
<?php
			//retrieve all the variables
			$basicText = filter_input(INPUT_POST, "basicText");
			$borderSize = filter_input(INPUT_POST, "borderSize");
			$sizeType = filter_input(INPUT_POST, "sizeType");
			$borderStyle = filter_input(INPUT_POST, "borderStyle");
			
			$theStyle = <<<HERE
			"border-width:$borderSize$sizeType;
			border-style:$borderStyle;
			border-color:green"
HERE;
			
			print "<div style = $theStyle>";
			print $basicText;
			print "</div>";
?>		
		</div>
	</body>
</html>