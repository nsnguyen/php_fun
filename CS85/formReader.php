<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Form Reader</title>
		
	</head>
	<body>
		<h1>Form Reader</h1>
		<h3>Here are the fields I found on the form</h3>
<?php
print <<< HERE
<table border = "1">
<tr>
	<th>Field</th>
	<th>Value</th>
</tr>
HERE;

foreach ($_REQUEST as $field => $value){
	print <<< HERE
<tr>
	<td>$field </td>
	<td>$value </td>
</tr>
HERE;

}//end foreaceh

?>
	</body>
</html>
