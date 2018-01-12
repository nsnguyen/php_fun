<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Test 3</title>
	</head>
	
	<body>

<?php

//define car class
class cars {
	
	//define properties of cars
	var $driver;
	var $color;
	var $year;
	var $make;
	var $model;
	
	//constructor of object
	function __construct($handle = "default"){
		$this ->driver = $handle;
		$this ->color = $handle;
		$this ->year = $handle;
		$this ->make = $handle;
		$this ->model = $handle;
		
	}
	
	//changing the properties of the car class
	function setDriver($newDriver){
		$this->driver = $newDriver;
	}

	function setColor($newColor){
		$this->color = $newColor;
	}
	
	function setYear($newYear){
		$this->year = $newYear;
	}
	
	function setMake($newMake){
		$this->make = $newMake;
	}
	
	function setModel($newModel){
		$this->model = $newModel;
	}
	
	//display all property of cars
	function showProperty(){
		print "<ul>";
		print "<li>". $this->driver . "</li>";
		print "<li>". $this->color . "</li>";
		print "<li>". $this->year . "</li>";
		print "<li>". $this->make . "</li>";
		print "<li>". $this->model . "</li>";
		print "</ul>";
		
	}
	
}

$car1 = new cars(); 
$car2 = new cars(); 
$car3 = new cars(); 

//assign values
$car1-> setDriver("Jeannie");
$car1-> setColor("absolute red");
$car1-> setYear("2007");
$car1-> setMake("Toyota");
$car1-> setModel("Solara");

$car2-> setDriver("Bill");
$car2-> setColor("burnt orange");
$car2-> setYear("1966");
$car2-> setMake("Chevrolet");
$car2-> setModel("Corvette");

$car3-> setDriver("Ken");
$car3-> setColor("pearl essence green");
$car3-> setYear("1966");
$car3-> setMake("Jaguar");
$car3-> setModel("XKE");

//printing the results
print "Car 1";
$car1->showProperty();

print "Car 2";
$car2->showProperty();

print "Car 3";
$car3->showProperty();

?>

	</body>
</html>
