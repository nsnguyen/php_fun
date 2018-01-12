<?php session_start() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>persistence</title>
	</head>
	
	<body>
		<h1>session.php</h1>
<?php

if (isset($_SESSION["counter"])){
	$counter = $_SESSION["counter"];
} else {
	$counter = 0;
} //end if
$counter++;
print "<h2>Counter: $counter</h2> \n";

//store new data in counter
$_SESSION["counter"] = $counter;

print <<< HERE
<form action = ""
		method = "post">
<p>
<button type = "submit">
		count
</button>
</p>
</form>
HERE;
?>
	</body>
</html>
