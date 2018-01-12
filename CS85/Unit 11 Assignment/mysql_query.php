<?php
/* mysql_query.php
   purpose:       execute a series of MySQL commands
   author:        J. Ken Geddes, Jr.
   date written:  04/26/2004
   last modified: 05/04/2007
*/

  define('BR', "<br />\n"); // for newline in both Web page and HTML source
  include('db_connection_info.inc'); // username and password

// make array of field names
   $fields = array('query0', 'query1', 'query2', 'query3');

// connect to server
   mysql_connect('localhost', $cs85Username, $cs85Password) or die('Could not connect to MySQL server');

// loop through the fields
   for ($i = 0; $i < count($fields); $i++) {
   // get the query from the form
      $field = $fields[$i];
      $query = (array_key_exists($field, $_POST)? $_POST[$field] : false);

   // save the query in a variable for use in the "sticky" form
   // need to use a variable variable - weird, but useful
   // I wanted this language feature when I first started programming in the 60's
      $field_name = 'query' . $i;
      $$field_name = $query;

   // run the query and display the results
      if ($query) {
         $result = mysql_query(addslashes($query));
			if (!$result) 
			   echo mysql_error();
		   else {
			   $num_rows = mysql_num_rows($result);
				echo "num_rows is $num_rows" . BR;
				$no_rows = ($num_rows == 0);
				if ($no_rows) {
				   echo "num_rows == 0 is " . $no_rows . BR;
				   echo '0 rows in result set' . BR;
				} else {
               while ($row = mysql_fetch_row($result)) {
                  foreach ($row as $v)
                     echo htmlspecialchars(stripslashes($v)) . BR;
               } // while
				} // else
	         echo BR;
		   } // else
      } // if $query
   } // for i   
?>

<html>
<head>
   <title>mysql_query</title>
</head>
<body>
<h1>mysql_query</h1>
<p>Enter the MySQL commands you want to run.</p>

<form action="mysql_query.php" method="POST">
   <table border="0">
<?php
/* We could generate the table rows in a loop. 
   Maybe use the generate_form_field() function implemented in an earlier lab assignment.
   Or, generate the input elements as strings inside the for loop above.
*/ 
?>
      <tr>
         <td align="right">command 0:</td>
         <td><input type="text" name="query0" value = <?php echo "'$query0'" ?> size="100"><br />
         </td>
      </tr>
      <tr>
         <td align="right">command 1:</td>
         <td><input type="text" name="query1" value = <?php echo "'$query1'" ?> size="100"><br />
         </td>
      </tr>
      <tr>
         <td align="right">command 2:</td>
         <td><input type="text" name="query2" value = <?php echo "'$query2'" ?> size="100"><br />
         </td>
      </tr>
      <tr>
         <td align="right">command 3:</td>
         <td><input type="text" name="query3" value = <?php echo "'$query3'" ?> size="100"><br />
         </td>
      </tr>
      <tr>
         <td colspan="2">
            <p align="center"><input type="submit" value="Execute Commands"></p>
         </td>
      </tr>
   </table>
</form>



</body>
</html>