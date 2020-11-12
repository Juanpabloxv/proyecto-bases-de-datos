<?php
 
// Create connection
require('../configuraciones/conexion.php');

$cedula = $_POST["cedula"];

//query
if($cedula<0){
	echo "cedula debe ser positiva";
}

else{
	$query="INSERT INTO `producto`(`mi_producto`,`mi_factura`, `cantidad`, `valor`)
 	VALUES ('$_POST[mi_producto]','$_POST[mi_factura]','$_POST[cantidad]','$_POST[valor]'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: personas.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la persona";
 	}

}

?>