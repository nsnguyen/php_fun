<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Param Old Man</title>
	</head>
	<body>
		<h1>Param Old Man</h1>
		<h3>Demonstrates use of function parameters</h3>
		
		<?php
		
		print verse(1);
		print chorus();
		print verse(2);
		print chorus();
		print verse(3);
		print chorus();
		print verse(4);
		print chorus();
		
		function verse($stanza){
			switch ($stanza){
				case 1:
					$place = "thumb";
					break;
				case 2:
					$place = "shoe";
					break;
				case 3:
					$place = "knee";
					break;
				case 4:
					$place = "door";
					break;
				default:
					$place = "I don't know where";
			}// end switch
			
			$output = <<<HERE
			<p>
				This old man, he played $stanza<br />
				He played knick-knack on my $place
			</p>
HERE;
	return $output;
		} //end verse
		
		function chorus(){
			$output = <<<HERE
		<p>
			...with a knick-knack <br />
			paddy-whack <br />
			give a dog a bone <br />
			this old man came rolling home <br />
		</p>
HERE;
	return $output;		
		} //end chorus
?>
	</body>
</html>
