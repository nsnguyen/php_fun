<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>SaveSonnet</title>
	</head>
	
	<body>

<?php

$sonnet76 = <<<HERE
Sonnet 76, Why is my verse so barren of new pride,
So far from variation of quick change?
why with the time do I not glance aside?
To new-found methods, and to compounds strange?
Why write I still all one, ever the same,
And keep invention in a noted weed,
That every word doth almost tell my name,
Showing their birth, and where they did proceed?
O! know sweet love are still my argument;
So all my best is dressing old words new,
Spending again what is already spent:
For as the sun is daily new and old,
So is my love still telling what is told.

HERE;

$fp = fopen("sonnet76.txt", "w");
fputs($fp, $sonnet76);
fclose($fp);

?>

	</body>
</html>
