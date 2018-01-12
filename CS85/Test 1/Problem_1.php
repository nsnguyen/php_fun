<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang = "en" dir = "ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Test 1 Problem 1</title>
		<link rel = "stylesheet"
			type = "text/css"
			href = "Problem_1.css" />
	</head>
	
	<body>
	<fieldset>

<?php

$full_name = filter_input(INPUT_POST, "full_name");
$action = filter_input(INPUT_POST, "action");
$page = filter_input(INPUT_POST, "page");

if(empty($page)){
       $page = 100;
}else{
}

switch($page){
case 2:
echo "Hi $full_name, how are you this $action ?";
break;
	
default:
?>
	<form method ="post"
			action = "">
			
		<label>Full Name:</label>
		<input type = "text"
				name = "full_name" />
		
  <label> Time of Day: </label>
  <select name = "action">
    <option value = "morning">morning</option>
	<option value = "afternoon">afternoon</option>
    <option value = "evening">evening</option>

	</select>
	
	<input type = "submit" value = "submit"/>
	<input type = "hidden" name ="page" value = "2"/>
	</form>
	
<?php
break;
}
?>

</fieldset>
	</body>
</html>
