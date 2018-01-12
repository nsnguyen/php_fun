<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang= "en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>For Each</title>
		
	</head>
	<body>
		<h1>Foreach Loop Demo</h1>
<?php

$list = array("alpha", "beta", "gamma", "delta","epsilon");

print "<ul>\n";
foreach ($list as $value){
	print "<li>$value</li>\n";
} //end foreach

print "</ul>\n";

?>
	</body>
</html>
