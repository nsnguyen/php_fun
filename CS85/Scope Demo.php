<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang = "en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Scope Demo</title>
	</head>
	
	<body>
		<h1>Scope Demo</h1>
		<h2>Deomonstrates variable scope</h2>
		
		<?php
		
		$a = "Ihave a value";
		$b = "I have a value";
		
		print <<<HERE
		<p>
		outside the function, <br />
		\$a is "$a", and <br />
		\$b is "$b"
		</p>
HERE;

		myFunction();
		function myFunction(){
			//make $a global, but not $b
			global $a;
			
		print <<<HERE
		<p>
		inside the function, <br />
		\$a is "$a", and <br />
		\$b is "$b"
		</P>
HERE;

		} //end myFunction
?>
	</body>
</html>
