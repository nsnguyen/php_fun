<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Poker Hand</title>
	</head>
	
	<body>

<?php

$suits = array ("s", "h", "c", "d");
$faces = array ("2", "3", "4", "5", "6", "7", "8",
				"9", "t", "j", "q", "k", "a");
$deck = array();

foreach ($suits as $suit) {
	foreach ($faces as $face) {
		$deck[] = array ("face" => $face, "suit" =>$suit);
	}
}

for ($i = 0; $i <5; $i++){
shuffle ($deck);
$card = array_shift ($deck);
//echo $card ['face'] . ' of ' .$card['suit'];

print( "<img src=\"../Unit 4 Assignment/cards/{$card[face]}{$card[suit]}.gif\">");
}

print <<< HERE
<form action = "pokerhand.php">
<input type="submit" value="Deal" >
HERE;
?>	

	
	</body>
</html>
