<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang = "en" dir = "ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>hobby</title>
		<style type = "html/css">
			h1, h2{
				text-align: center;
			}
		</style>
		
	</head>
	
	<body>
		<h1>Searching completed...</h1>
		
<?php

$full_name = filter_input(INPUT_POST, "full_name");
$email = filter_input(INPUT_POST, "email");
$hobby = filter_input(INPUT_POST, "hobby");

print <<<HERE

<h2> 
Hi. <br />
You have entered $full_name as your name. <br />
That is not your real name. You actually don't have a name. <br />
<br />
You have entered $email as your email. <br />
That is incorrect. In fact, you're not actually connected to the web right now. <br />
<br />
You have entered $hobby as your favourite hobby. <br />
That is impossible. The truth is, you're not even here. <br />

:O

</h2>

HERE;
?>
	</body>
</html>
