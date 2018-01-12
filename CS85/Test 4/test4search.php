<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Test 4 Class Search</title>
	</head>
	
	<body>
<?php

//get user data
$searchterm=$_POST['searchterm'];


// connect to server
$connect  = mysql_connect("localhost", 'user4', 'pass4')  
	or die('Unable to connect to MySQL.  ' . mysql_error()); 
// select the database to use 
mysql_select_db("classes", $connect)
    or die('Unable to select database.  ' . mysql_error()); 


echo "You searched $searchterm";


//the mysql query search based on sections
$sql = "
Select name, title, course_number, section
From classes
INNER JOIN instructors
ON classes.instructor_id=instructors.instructor_id
WHERE section LIKE '$searchterm'
ORDER BY instructors.name, classes.title;
";


$result = mysql_query($sql, $connect);
if (!$result)
   die('SQL query failed: ' . $sql .  '  ' . mysql_error());

// The following section neatly formats the result set into an HTML table.
print "<table border = 1>\n";

//get field names
print "<tr>\n";
while ($field = mysql_fetch_field($result)){
  print "  <th>$field->name</th>\n";
} // end while
print "</tr>\n\n";

//get row data as an associative array
while ($row = mysql_fetch_assoc($result)){
  print "<tr>\n";
  //look at each field
  foreach ($row as $col=>$val){
    print "  <td>$val</td>\n";
  } // end foreach
  print "</tr>\n\n";
}// end while

print "</table>\n<br/>"; 


//if result is less than 1 row, it means nothing was found
$num_rows = mysql_num_rows($result);
if ( $num_rows < 1) 
	print "Section not found.";

?>

	</body>
</html>