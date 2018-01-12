<?php session_start() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Word Find Answer Key</title>
<link rel = "stylesheet"
      type = "text/css"
      href = "wordFind.css" />

</head>
<body>

<?php 
//answer key for word find
//called from session variable

$puzzleName = $_SESSION["puzzleName"];
$key = $_SESSION["key"];

print <<<HERE

<h1>$puzzleName Answer key</h1>
$key

HERE;
?>
</body>
</html>