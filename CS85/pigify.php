<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Pig Latin Generator</title>
		
	</head>
	
	<body>
		<h1>Pig Latin Generator</h1>
<?php

if (!filter_has_var(INPUT_POST, "inputString")){
	print <<< HERE
	<form action = ""
			method = "post">
		<fieldset>
		<textarea name = "inputString"
					rows = "20"
					cols = "40"></textarea>
		<input type = "submit"
				value = "pigify" />
		</fieldset>
		</form>
HERE;

} else {
	// there is a value, so we'll deal with it
	
	$inputString = filter_input(INPUT_POST, "inputString");
	$newPhrase = "";
	//break phrase into array
	$words = split("", $inputString);
	foreach ($words as $theWord){
		$theWord = rtrim($theWord);
		$firstLetter = substr($theWord, 0,1);
		$restofWord = substr($theWord, 1,strlen($theWord)-1);
		//print "$firstLetter) $restOfWord <br /> \n";
		
		if(strstr("aeiouAEIOU", $firstLetter)){
			//it's a vowel
			$newWord = $theWord . "way";
		} else {
			//it's a consonant
			$newWord = $restOfWord . $firstLetter . "ay";
		} //end if
		$newPhrase = $newPhrase . $newWord . "";
	} //end foreach
	print "<p>$newPhrase</p> \n";
	
} //end if

?>
	</body>
</html>
