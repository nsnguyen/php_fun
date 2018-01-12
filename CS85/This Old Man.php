<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>This Old Man</title>
	</head>
	
	<body>
		<h1> This Old Man</h1>
		<h3>Demonstrates use of functions</h3>
		
		<?php
		verse1();
		chorus();
		verse2();
		chorus();
		
		function verse1(){
			print <<<HERE
			<p>
			This old man, he played 1 <br />
			He played knick-knack on my thunb
			</p>
HERE;
		} //end verse1
		
		function verse2(){
			print <<<HERE
			<p>
			This old man, he played 2 <br />
			He played knick-knack on my shoe
			</p>
HERE;
		} // end verse2
		
		function chorus(){
			print <<<HERE
			<p>
			...with a knick-knack <br />
			paddy-whack <br />
			give a dog a bone <br />
			This old man cam rolling home <br />
			</p>
HERE;
		} //end chorus
?>
	</body>
</html>
