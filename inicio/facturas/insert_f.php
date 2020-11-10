<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query

if($_POST["exampleRadios2"]==="empresa"){
    $query="INSERT INTO factura(`numero_de_factura`, `fecha_de_venta`, `valor_total`, `tipo`, `nit_empresa`) 
	VALUES('$_POST[codigo]','$_POST[fecha]','$_POST[valor]','$_POST[tipo]','$_POST[identificacion]')";
    
}
else{
	$query="INSERT INTO factura(numero_de_factura,fecha_de_venta,valor_total,tipo,cedula_persona)
 	VALUES('$_POST[codigo]','$_POST[fecha]','$_POST[valor]','$_POST[tipo]','$_POST[identificacion]')";
}
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: facturas.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la persona";
 	}



?>
