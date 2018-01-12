

<?php
//followed a tutorial online
if (mysql_connect('localhost','root', '') && mysql_select_db('guestbook')) {

	$time = time();
	$errors = array();
	
	if (isset($_POST['guestbook_name'],$_POST['guestbook_email'], $_POST['guestbook_message'])){
		
		$guestbook_name = mysql_real_escape_string(htmlentities($_POST['guestbook_name']));
		$guestbook_email = mysql_real_escape_string(htmlentities($_POST['guestbook_email']));
		$guestbook_message = mysql_real_escape_string(htmlentities($_Post['guestbook_message']));
		
		if (empty($guestbook_name) || empty($guestbook_email) || empty($guestbook_message)){
			$errors[] = 'All fields are required.';
		}
		
		if (strlen($guestbook_name)>25 || strlen($guestbook_email)>255 || strlen($guestbook_message)>255)
		$errors[] = 'One or more fields exceeded the character limit.';
	}
	
	if(empty($errors)){
		$insert = "INESRT INTO 'entries' VALUES ('','$time','$guestbook_name','$guestbook_email',$guestbook_message')";
		if($insert = mysql_query($insert)) {
			header('Location:'.$_SERVER['PHP_SELF']);
		} else {
			$errors[] = 'Something went wrong. Please try again soon.';
		}
		
		
	} else{
		foreach($errors as $error){
			echo '<p><strong>'.$error.'</strong></p>';
		}
	}
	
$entries = mysql_query("SELECT 'timestamp', 'name', 'email', 'message' FROM 'entries' ORDER BY 'timestamp' DESC");
	
if (mysql_num_rows($entries)==0) {
	echo 'No entries, yet.';
}	else {
	while ($entries_row = mysql_fetch_assoc($entries)){
		$entries_timetamp = date('D M Y @ h:i:s',$entries_row['timestamp']);
		$entries_name = $entries_row['name'];
		$entries_email = $entries_row['email'];
		$entries_message = $entries_row['message'];
		
		echo '<p><strong>Posted by '.$entries_name.'('.$entries_email.') on '.$entries_timestamp.' </strong>:<br>'.$entries_message.'</p>';
	}
}

}else {
	echo 'Could not connect at this time.';
}


?>


<hr>
<form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "post">
<strong>Post something...</strong><br>
Name: <br><input type = "text" name = "guestbook_name" maxlength ="25"><br>
Email:<br><input type = "text" name = "guestbook_email" maxlength ="255"><br>
Message:<br><textarea name = "guestbook_message" rows = "5" cols="40" maxlength"255"></textarea>
<input type ="submit" value ="post">

	
</form>
