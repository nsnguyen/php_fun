<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang = "en" dir = "ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Test 1 Problem 3</title>
<link rel = "stylesheet"
type = "text/css"
href = "Problem_3.css" />

</head>

<body>
<fieldset>

<?php

$full_name = filter_input(INPUT_POST, "full_name");

$ID = filter_input(INPUT_POST, "ID");

$room = filter_input(INPUT_POST, "room");

$computer = filter_input(INPUT_POST, "computer");

$yaya = "Thank you for verifying your information.";

$page_stage = filter_input(INPUT_POST, "page_stage");

$decision = filter_input(INPUT_POST, "decision");


if(empty($page_stage)){
       $page_stage = 100;
}else{
}

if($decision == 'Yes'){
	$page_stage = 2;
}

switch ($page_stage) {
	
case 2:
print $yaya;		
break;

case 1:
?>

<?php echo "Hi $full_name, <br />
Your employee ID is $ID, your office is room $room, and your OS is $computer. <br />
If this is correct, click Yes. Otherwise, click No. <br />"?>


<form method = "post">
	<input type = "submit" name = "decision" value = "Yes" />

	<input type = "submit" name = "decision" value = "No" />

<?php

?>

</form>
<?php
break;

default:
?>


<form method ="post">

<label>Full Name:</label>

<input type = "text" name = "full_name" />


<label>Employee ID:</label> 

<input type = "text" name = "ID" />

<label>Office Room Number:</label>

<input type = "text" name = "room" />

<label>Operating System on office computer:</label>

<input type = "text" name = "computer" />

<input type = "submit" value="submit"/>

<input type = "hidden" name= "page_stage" value="1"/>

</form>

<?php
break;
}


?>


</fieldset>
</body>

</html>