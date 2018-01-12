<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
	<meta http-equiv="content-type" content="text/xml; charset=utf-8" />
	<link rel = "stylesheet"
			type = "text/css"
			href = "readArray.css" />
			
		<title>Read Array</title>
	</head>
	<body>
<?php

if (filter_has_var(INPUT_POST, "people")){
	showPeople();
} else {
	printForm();
} // end if

function printForm(){

print <<< HERE
<h2>Type in your people here... </h2>
<form action = ""
		method = "post">
		<fieldset>
		<input type = "text"
				name = "people[0]"
				value = "Andy" />
		<input type = "text"
				name = "people[1]"
				value = "Heather" />
		<input type = "text"
				name = "people[2]"
				value = "Elizabeth" />
		<input type = "text"
				name = "people[3]"
				value = "Matthew" />
		<input type = "text"
				name = "people[4]"
				value = "Jacob" />
		<input type = "text"
				name = "people[5]"
				value = "Benjamin" />
		<button>
		submit
		</button>
		</fieldset>
		</form>
HERE;
								
} // end printForm

function showPeople (){
	$formData = filter_input_array(INPUT_POST);
	$people = $formData["people"];
	
	print "<h2>Your People </h2> \n";
	print "<pre>";
	print_r($people);
	print "</pre>";
	
	print "<ul> \n";
	for ($i = 0; $i < count($people); $i++){
		print " <li>$people[$i] </li> \n";
	} // end for loop
	
	print "</ul> \n";
	
}	// end showPeoples

?>				
	</body>
</html>
