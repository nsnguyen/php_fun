<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>2D Array</title>
	</head>
	
	<body>
		<h1>2D Array</h1>
		
	<form action = "multiArray.php"
			method = "post">
	<table border = "1">
		
		<tr>
			<th>First City</th>
			<th>Second City</th>
			
		</tr>
		
		<!-- note each option value is a string -->
		
		<tr>
			<td>
				<select name = "cityA">
					<option value = "Indianapolis">Indianapolis</option>
					<option value = "New York">New York</option>
					<option value = "Tokyo">Tokyo</option>
					<option value = "London">London</option>
					
				</select>
			</td>
			
			<td>
				<select name = "cityB">
					<option value = "Indianapolis">Indianapolis</option>
					<option value = "New York">New York</option>
					<option value = "Tokyo">Tokyo</option>
					<option value = "London">London</option>
				
				</select>
			</td>
		</tr>
		
		<tr>
			<td colspan = "2">
				<input type = "submit"
						value = "calculate distance" />
			</td>
		</tr>
	</table>
			
	</form>
	
<?php
//create arrays

$indy = array(
"Indianapolis" => 0,
"New York" => 648,
"Tokyo" => 6476,
"London" => 4000
);

$ny = array(
"Indianapolis" => 648,
"New York" => 0,
"Tokyo" => 6760,
"London" => 3470
);

$tokyo = array(
"Indianapolis" => 6476,
"New York" => 6760,
"Tokyo" => 0,
"London" => 5956
);

$london = array(
"Indianapolis" => 4000,
"New York" => 3470,
"Tokyo" => 5956,
"London" => 0
);

//set up master array
$distance = array (
"Indianapolis" => $indy,
"New York" => $ny,
"Tokyo" => $tokyo,
"London" => $london
);

$cityA = filter_input(INPUT_POST, "cityA");
$cityB = filter_input(INPUT_POST, "cityB");

$result = $distance[$cityA][$cityB];
print "<h3>The distance between $cityA and $cityB is $result miles.</h3>";

?>


	</body>
</html>
