<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		Create Tables
	</head>
	
	<body>
<?php

// include password file
include('db_connection_info.inc'); 

// connect to server
$connect  = mysql_connect("localhost", $cs85Username, $cs85Password)  
	or die('Unable to connect to MySQL.  ' . mysql_error()); 

// select the database to use 
mysql_select_db("albums", $connect)
    or die('Unable to select database.  ' . mysql_error()); 

// creating table
mysql_query("DROP TABLE IF EXISTS nguyen_nguyen_albums");
mysql_query("DROP TABLE IF EXISTS nguyen_nguyen_artists");


mysql_query(
"CREATE TABLE nguyen_nguyen_artists
(artistID int NOT NULL AUTO_INCREMENT,
artistName varchar(30),
PRIMARY KEY(artistID) )"
);

mysql_query(
"CREATE TABLE nguyen_nguyen_albums
(albumID int NOT NULL AUTO_INCREMENT,
albumName varchar(30),
albumType varchar(30),
artistID int,
PRIMARY KEY(albumID),
FOREIGN KEY (artistID) REFERENCES nguyen_nguyen_artists (artistID) )"
);


//inserting test data
mysql_query(
"INSERT INTO nguyen_nguyen_artists
VALUES(null,'Nguyen')"
);

mysql_query(
"INSERT INTO nguyen_nguyen_albums
VALUES(null,'Nguyens First Album','CDs', 1)"
);


//create a query
$sql = "SELECT * FROM nguyen_nguyen_artists";
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

print "</table>\n"; 

print"<br/>";

//same as above but for my albums table
//display the tables and all the data
$sql = "SELECT * FROM nguyen_nguyen_albums";
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

print "</table>\n"; 


?>
	</body>
</html>