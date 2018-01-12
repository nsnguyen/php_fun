<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Conway's Game of Life</title>
<style type = "text/css">
body {
  background: white;
  color: green;
  font-weight:900;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<center>
<h1>Conway's Game of Life</h1>
<?php 
/*

Filename: gameOfLife.php
Title: Conway's Game of Life
Programmer: Ken Geddes
Date: April 4, 2008
Last Modified: October 25, 2010
Purpose: This program displays successive generations of a colony of cells arranged in a grid. Inside 
   each cell there may be life. From one generation to the next, life begins, continues, or ends
   according to the following conditions:

   If the cell is alive, it will die of loneliness if it has fewer than two neighbors. It will will
   die from overcrowding if it has more than three neighbors.

   If there is no life in the cell and there are exactly three neighbors, birth occurs. 

ALGORITHM 0:
For each cell,
   if alive
      if the cell has fewer than two or more than three neighbors
         it dies
   else
      if it has exactly three neighbors
         it becomes alive
*/

extract($_POST); // create form variables
error_reporting(E_ALL & ~E_NOTICE); // get rid of run-time notices

// global variables
// if first time script is run (or user enters bad data)
if(!$NUM_ROWS || !NUM_COLS) $NUM_ROWS = $NUM_COLS = 20;
$cells = array();
$cellsNextGen = array();

// debugging code
/*
foreach($_POST as $key => $value) {
   print "$key => $value   <br />\n";
   if (is_array($value))
      foreach($value as $k => $v)
	     print "$k => $v   \n";
   print "<br /><br />\n";
} // end foreach $_POST
*/
 
// main code to determine response based on user action
if ($btnNextGeneration) {
   $txtGenerationCount++;
   nextGeneration();   
} // end if btnNextGeneration	
else if ($btnExit) {
   print "Thanks for playing Conway's Game of Life.";
} // end if btnExit
else { // either first time script called, or user pressed Start Over button
   $txtGenerationCount = 0;
   start('set initial pattern');
} // end else	


// display grid and optional initial pattern
function start($initialPattern) {
   global $NUM_ROWS, $NUM_COLS, $cellsNextGen;
		
   // display grid
	for ($row = 0; $row < $NUM_ROWS; $row++ ) {
      for ($col = 0; $col < $NUM_COLS; $col++ ) {
         $cellsNextGen[$row][$col] = false;
      } // end for col
   } // end for row
	
	if ($initialPattern)
	   setInitialPattern();

   printForm(true); // start is true
} // end start

// set interesting initial pattern that stabilizes at the 23rd generation
function setInitialPattern() {
   global $cellsNextGen;
		
	// set initial pattern
   $cellsNextGen[8][10] = true;
   $cellsNextGen[8][11] = true;
   $cellsNextGen[9][10] = true;
   $cellsNextGen[10][10] = true;
   $cellsNextGen[11][10] = true;
   $cellsNextGen[11][11] = true;
   $cellsNextGen[11][12] = true;	
} // end setInitialPattern


// generate the next generation
// first get the current pattern from the form data
//    Note: storing the pattern in a session variable would be better since there is much overhead
//          in sending the pattern to the client and back again to the server.
// store this in the $cells two-dimensional Boolean array
// store it in the $cellsNextGen also
// determine the next generation
// store this in the $cellsNextGen two-dimensional Boolean array
function nextGeneration() {
   global $NUM_ROWS, $NUM_COLS, $chkCells, $cells, $cellsNextGen;
   
// get the current pattern from the form data
// store this in the $cells two-dimensional Boolean array
   for ($i = 0; $i < $NUM_ROWS; $i++ ) {
	  // print "\$chkCells[$i] is $chkCells[$i] and it " . (is_array($chkCells[$i])? 'is ' : 'is not ') . "an array. <br />\n";
	  if (is_array($chkCells[$i])) 
	     foreach ($chkCells[$i] as $col) { // value is column index
	        $cells[$i][$col] = true; // column had a checkmark
	        $cellsNextGen[$i][$col] = true; // need to initialize in nextGen also; may change later
	     } // end foreach
   } // end for row
//printBooleanArray($cells);
   
// determine the next generation
// store this in the $cellsNextGen two-dimensional Boolean array
//print "<pre>";
   for ($row = 0; $row < $NUM_ROWS; $row++ ) {
      for ($col = 0; $col < $NUM_COLS; $col++ ) {
	     $cell = $cells[$row][$col];
 		  $numNeighbors = numNeighbors($row, $col);
         //print "$cell $row $col $numNeighbors   ";		 
         if ($cell) {// alive
            if ($numNeighbors < 2 || $numNeighbors > 3)
               $cellsNextGen[$row][$col] = false; // cell dies off
         } // end if cell
		   else
            if ($numNeighbors == 3)
               $cellsNextGen[$row][$col] = true; // cell comes alive
      } // end for col
	  //print "<br />\n";
   } // end for row
//print "</pre>";

//printBooleanArray($cellsNextGen);   

   printForm(false); // start is false
} // end nextGeneration


// calculate the number of neighbors of a subject cell
function numNeighbors($row, $col) {
   global $NUM_ROWS, $NUM_COLS, $cells;
   $numNeighbors = 0;
   
   for ($r = $row-1; $r <= $row+1; $r++) {
      for ($c = $col-1; $c <= $col+1; $c++) {
	     if ($r >= 0 && $r < $NUM_ROWS &&
		     $c >= 0 && $c < $NUM_COLS &&
			 !($r == $row && $c == $col) && // not the subject cell
			 $cells[$r][$c])
		        $numNeighbors++;
      } // end for c
   } // end for r

   return $numNeighbors;
} // end numNeighbors


// for debugging only
function printBooleanArray($arr) {
   global $NUM_ROWS, $NUM_COLS;
   
   print "<pre>";
   for ($row = 0; $row < $NUM_ROWS; $row++ ) {
      for ($col = 0; $col < $NUM_COLS; $col++ ) {
	     $cell = $arr[$row][$col];
		 print " $cell  ";
      } // end for col
	  print "<br />\n";
   } // end for row
   print "</pre>";
} // end printBooleanArray


// display instructions and allow input of grid size
function displayInstructions() {
   global $NUM_ROWS, $NUM_COLS;
	
   print "<p>Click the cells in the grid to specify the initial pattern of live cells. Or, use the initial pattern already entered which will stabilize on the 23rd generation. Interestingly, if you add just one more live cell immediately to the right of the live cell in the second row of this pattern, the population stabilizes on the 299th generation. In general, one cannnot predict what will happen just by looking at an initial pattern.</p>\n";
	print "<p>You may also specify the size of the grid. Note that this will affect the growth pattern.<br />\n";
	print "Rows: <input type = 'text' size = '2' maxlength = '2' name = 'NUM_ROWS' id = 'NUM_ROWS' value = '$NUM_ROWS' />\n";
	print "Columns: <input type = 'text' size = '2' maxlength = '2' name = 'NUM_COLS' id = 'NUM_COLS' value = '$NUM_COLS' /></p>\n";
} // end displayInstructions


// output the form
function printForm($start) {
   global $NUM_ROWS, $NUM_COLS, $cellsNextGen, $txtGenerationCount;
   
// print table of cells   
   print "<form method = 'post'>\n";
   print "<table width='100%' border='1' cellpadding='0' cellspacing='0'>\n";
   for ($row = 0; $row < $NUM_ROWS; $row++ ) {
      print "<tr>\n";
      for ($col = 0; $col < $NUM_COLS; $col++ ) {
	     $alive = $cellsNextGen[$row][$col];
         print "<td><input type = 'checkbox' name = 'chkCells[$row][$col]' id = 'chkCells[$row][$col]' value = '$col' " . ($alive? " checked = 'checked' " : "") . " /></td>\n";
      } // end for col
      print "</tr>\n";  
   } // end for row
   print "</table>\n";
   
// if start, display instructions (and allow input of grid size)
if ($start)
   displayInstructions();
else { // grid dimensions must persist unchanged
   print "<input type = 'hidden' name = 'NUM_ROWS' id = 'NUM_ROWS' value = '$NUM_ROWS' />\n";
	print "<input type = 'hidden' name = 'NUM_COLS' id = 'NUM_COLS' value = '$NUM_COLS' />\n";
} // end else

// print buttons
   print <<<HERE
       <input type = "submit" name = "btnNextGeneration" id = "btnNextGeneration" value = "Next Generation" />
       <input type = "text" size = "4" name = "txtGenerationCount" id = "txtGenerationCount" value = "$txtGenerationCount" />
       <input type = "submit" name = "btnStartOver" id = "btnStartOver" value = "Start Over" />
       <input type = "submit" name = "btnExit" id = "btnExit" value = "Exit" />
   </form>
   <script type = "text/javascript">
      document.getElementById("btnNextGeneration").focus(); // put focus on Next Generation button
   </script>
HERE;
} // end printForm
?>
</center>
</body>
</html>