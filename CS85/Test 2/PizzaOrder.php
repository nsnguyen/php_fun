<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Pizza Order</title>

		
	</head>
	
	<body>
<?php
extract($_REQUEST);
$kind = filter_input(INPUT_POST, "kind");
	$size = filter_input(INPUT_POST, "size");
	
	
//create arrays
$plain = array(
"small" => 3.50,
"medium" => 6.25,
"large" => 8.00);

$vegeterian = array(
"small" => 4.35,
"medium" => 7.60,
"large" => 12.00);

$pepperoni = array(
"small" => 7.25,
"medium" => 10.75,
"large" => 14.00);

$hawaiian = array(
"small" => 8.00,
"medium" =>12.50,
"large" => 15.50);

//master array
$pizzaPrices = array(
"plain" => $plain,
"vegeterian" => $vegeterian,
"pepperoni" => $pepperoni,
"hawaiian" => $hawaiian);



?>


		<h1>Pizza Order</h1>
  	  <table border="1" cellspacing="1" cellpadding="2">
      <tr>
        <th width="100" scope="col">&nbsp;</th>
        <th width="100" scope="col">Small</th>
        <th width="100" scope="col">Medium</th>
        <th width="100" scope="col">Large</th>
      </tr>
      <tr>
        <td align="center"><strong>Plain</strong></td>
        <td align="right"><? print number_format(($pizzaPrices["plain"]["small"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["plain"]["medium"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["plain"]["large"]),2,'.','') ; ?></td>
      </tr>
      <tr>
        <td align="center"><strong>Vegetarian</strong></td>
        <td align="right"><? print number_format(($pizzaPrices["vegeterian"]["small"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["vegeterian"]["medium"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["vegeterian"]["large"]),2,'.','') ; ?></td>
      </tr>
      <tr>
        <td align="center"><strong>Pepperoni</strong></td>
        <td align="right"><? print number_format(($pizzaPrices["pepperoni"]["small"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["pepperoni"]["medium"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["pepperoni"]["large"]),2,'.','') ; ?></td>
      </tr>
      <tr>
        <td align="center"><strong>Hawiian</strong></td>
        <td align="right"><? print number_format(($pizzaPrices["hawaiian"]["small"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["hawaiian"]["medium"]),2,'.','') ; ?></td>
        <td align="right"><? print number_format(($pizzaPrices["hawaiian"]["large"]),2,'.','') ; ?></td>
      </tr>
    </table>
		<form action= "" method = "post">
			<table border = "1">
				<tr>
					<td>
						<select name = "kind">
							<option value = "plain">Plain</option>
							<option value = "vegeterian">Vegetarian</option>
							<option value = "pepperoni">Pepperoni</option>
							<option value = "hawaiian">Hawaiian</option>
						</select>
					</td>
					
					<td>
						<select name = "size">
							<option value = "small">Small</option>
							<option value = "medium">medium</option>
							<option value = "large">Large</option>
						</select>

					</td>
				</tr>

				
				<tr>
					<td colspan = "2">
						<input type = "submit" value = "calculate cost">
					</td>
				</tr>
			</table>
			
		</form>
		
		
<?


	
	print "Here is your receipt ";
	
	$cost = $pizzaPrices[$kind][$size];
	$tax = number_format(($cost * 0.0975),2,'.','');
	$total = number_format(($cost + $tax), 2,'.',''); ?>
	
	<table width="240" border="1" cellspacing="1" cellpadding="1">
	  <tr>
		<td><strong>Kind of Pizza</strong>
		<td align="center"> <? print "$kind" ?> </th>
	  </tr>
	  <tr>
		<td><strong>Size</strong></td>
		<td align="center"><? print "$size" ?></td>
	  </tr>
	  <tr>
		<td><strong>Price</strong></td>
		<td align="right"><? print number_format(($pizzaPrices[$kind][$size]),2,'.','') ; ?></td>
	  </tr>
	  <tr>
		<td><strong>Tax</strong></td>
		<td align="right"><? print "$tax" ?> </td>
	  </tr>
	  <tr>
		<td><strong>Total</strong></td>
		<td align="right"><? print "$total" ?> </td>
	  </tr>
	</table>


	</body>
</html>