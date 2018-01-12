<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir ="ltr" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<title>Fancy Old Man</title>
	</head>
	<body>
		<h1>This Old man with Arrays</h1>
<?php
$place = array(
"",
"on my thumb",
"on my shoe",
"on my knee",
"on a door");

//print out song
for ($verse = 1; $verse <=4; $verse++){

print <<< HERE
<p>
This old man, He played $verse <br />
He played knick-knack $place[$verse] <br />
... with a knick, knack, paddy-whack <br />
give a dog a bone <br />
This old man came rolling home
</p>
HERE;

} //end for loop
?>

	</body>
</html>
