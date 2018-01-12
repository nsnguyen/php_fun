<!DOCTYPE hthtml PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Hi User</title>
	</head>
	<body>
		<h1>Hi User</h1>
		
		<?php
		
		if (filter_has_var(INPUT_POST, "userName")){
			// the form exists, so work with it
			$userName = filter_input (INPUT_POST, "userName");
			print "<h2>Hi there, $userName!</h2> \n";
			
		} else {
			//there's no input. Create the form
			print <<< HERE
			<form action = ""
				  method = "post">
			<fieldset>
				<label>Please enter your name </label>
				<input type = "text"
						name = "userName" />
				<button type = "submit">
					submit
				</button>
				</fieldset>
				</form>
HERE;
		} //end 'value exists' if
?>
	</body>
</html>
