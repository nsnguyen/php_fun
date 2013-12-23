<?php


$guess = filter_input(INPUT_POST, "guess");
$counter = filter_input(INPUT_POST, "counter");
$number = filter_input(INPUT_POST, "number");


if(empty($number)){
	print "<h4>Please guess a number between 1 to 100.<h4>\n";
	$number=rand(1,100);
	$counter=0;
} else {
	if($number==$guess){
	$counter++;
	print "<h4>You guessed $number in $counter steps.<h4>\n";

	}
	if($guess<$number){
	$counter++;
	print "<h4>Too low. Guess a higher number.<h4>\n";
	}
	if($guess>$number){
	$counter++;
	print "<h4>Too high. Guess a lower number.<h4>\n";
	}
}

print <<< HERE
<form method="post">
<input type = "hidden" name = "number" value = "$number">
<input type = "hidden" name = "counter" value = "$counter">
<input type = "text" name = "guess">
<input type="submit" value="Guess it">
</form>
HERE;

?>
