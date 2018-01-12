<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang ="EN" dir = "ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Basic Array</title>
	</head>
	
	<body>
		<h1>Basic Array</h1>

<?php

//simply assign values to array

$camelPop[1] = "Somalia";
$camelPop[2] = "Sudan";
$camelPop[3] = "Mauritania";
$camelPop[4] = "Pakistan";
$camelPop[5] = "India";

//output array values
print "<h3>Top Camel Populations in the World</h3>\n";
print "<p> \n";

for ($i = 1; $i <= 5; $i++){
	print "$i: $camelPop[$i]<br />\n";
}// end for loop

print "</p> \n";

print <<< HERE
<p style = "text-decoration: italic">
	Source:
	<a href = "http://www.fao.org/ag/aga/glipha/index.jsp">
Food and Agriculture Organization of the United Nations </a>
</p>

HERE;

//use array funciton to load up array

$binary = array("000", "001", "010", "011");

print "<h3>Binary numbers </h3>\n";
print "<p> \n";
for ($i = 0; $i <count ($binary); $i++){
	print "$i: $binary[$i]<br />\n";
	
} //end for loop

print "</p> \n";
?>
	</body>
