<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Generate Page</title>
		<style>
			body{
				background-color: <?php
				 echo $_POST['BackgroundColor']; 
				 ?>
			}
		</style>
	</head>
	
	<body>
		
<?php

$Caption = filter_input(INPUT_POST, "Caption");
$BackgroundColor = filter_input(INPUT_POST, "BackgroundColor");
$TextColor = filter_input(INPUT_POST, "TextColor");
$Content = filter_input(INPUT_POST, "Content");

echo "<font color = ".$_POST['TextColor'].">" . $Caption . "</font><br>";
echo "<font color = ".$_POST['TextColor'].">" . $Content . "</font>";
?>

	</body>
</html>