<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		Insert Album
	</head>
	
	<body>
	
<?php

include('db_connection_info.inc'); 		
	
	
//get user data
$albumName=$_POST['albumName'];
$type=$_POST['type'];
$artistID=$_POST['artistID'];

$connect  = mysql_connect("localhost", $cs85Username, $cs85Password)  
	or die('Unable to connect to MySQL.  ' . mysql_error()); 
// select the database to use 
mysql_select_db("albums", $connect)
    or die('Unable to select database.  ' . mysql_error()); 

//insert the album
mysql_query(
"INSERT INTO nguyen_nguyen_albums
VALUES(null, '$albumName', '$type', '$artistID' )"
);


$sql = "SELECT * FROM nguyen_nguyen_albums";
$result = mysql_query($sql, $connect);
if (!$result)
   die('SQL query failed: ' . $sql .  '  ' . mysql_error());


print "<table border = 1>\n";

//get field names
print "<tr>\n";
while ($field = mysql_fetch_field($result)){
  print "  <th>$field->name</th>\n";
}
print "</tr>\n\n";

//get row data as an associative array
while ($row = mysql_fetch_assoc($result)){
  print "<tr>\n";
  //look at each field
  foreach ($row as $col=>$val){
    print "  <td>$val</td>\n";
  }
  print "</tr>\n\n";
}

print "</table>\n"; 

print"<br/>";



?>	
</body>
</html>