<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<title>Test 1 Problem 2</title>
	</head>
	
	<body>
		
<?php
$email = "fred@carpets.com";

$text =  <<<HERE
<p>
This is a really long 'string' that covers several "lines" <br />
and has an embedded variabl $email <br />
and both single and double quotes. <br />

</p>
HERE;

print $text;

?>


	</body>
</html>