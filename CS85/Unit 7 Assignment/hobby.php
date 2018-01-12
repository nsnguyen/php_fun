<?php
extract($_REQUEST);
error_reporting(E_ALL & ~E_NOTICE);

include "SuperHTMLDef.php";
$s = new SuperHTML("You successfully signed up!");
$s->buildTop();

$s->tag("p", "Thanks $name, we will make sure to send you deals about $hobby to the following email: $email");

$s->buildBottom();
print $s->getPage(); 

?>


