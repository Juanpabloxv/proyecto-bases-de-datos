<?php
 
// Create connection
require('../configuraciones/conexion.php');

$cedula = $_POST["nit"];

//query
if($nit<0){
	echo "nit debe ser positivo";
}

else{
	$query="INSERT INTO `empresa`(`nit`,`nombre`, `direccion`, `ciudad`, `telefono`)
 	VALUES ('$_POST[nit]','$_POST[name]','$_POST[direccion]','$_POST[ciudad]','$_POST[telefono]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: empresas.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la empresa";
 	}


}

?>
