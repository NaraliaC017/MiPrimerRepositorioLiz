<?php
//echo "NO HAY QUIZ";
	
$ciudades = array("MEDELLIN", "BOGOTA", "CALI", "SANTA MARTA", "BARRANQUILLA", "PEREIRA");
$ciudades[]="MANIZALES";
print_r($ciudades);
	
//	$nombre = ["liz", "MARIANA", "NATALIA" , "JUAN"];
	
//unset($nombre[3]);

//print_r($nombre);

	$ciudadesEliminar = "SANTA MARTA";
	$llave = array_search($ciudadesEliminar, $ciudades);
	
	if($llave!==false){
	  unset($ciudades[$llave]);
	}
	
	print_r($ciudades);
	
?>