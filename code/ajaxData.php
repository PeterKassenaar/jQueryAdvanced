<?php
	header('Content-type: application/json')
?>
<?php
	// In deze pagina wordt een eenvoudige JSON-string
	// geretourneerd. In werkelijkheid zul je hier 
	// code plaatsen die bv. gegevens uit een database
	// haalt. Met json_encode() kun je deze als 
	// JSON-string terugsturen.
	
	// Als er data wordt meegestuurd naar deze pagina, zijn 
	// die in $_POST[] of $_GET[] aanwezig. Bijvoorbeeld:
	//	$naam = $_POST['naam'];
	//	echo 'Hallo ' .$naam;
?>
{ "naam" : "peter", "leeftijd" : "43", "woonplaats": "Dieren" }