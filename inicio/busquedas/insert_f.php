<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query

var_dump($_POST);
if($_POST["exampleRadios2"]==="empresa"){
    $query="INSERT INTO factura(`numero_de_factura`, `fecha_de_venta`, `valor_total`, `tipo`, `nit_E`) 
	VALUES('$_POST[numero_de_factura]','$_POST[fecha_de_venta]','$_POST[valor_total]','$_POST[tipo]','$_POST[identificacion]')";
    
}
else{
	$query="INSERT INTO factura(numero_de_factura,fecha_de_venta,valor_total,tipo,cedula_p)
 	VALUES('$_POST[numero_de_factura]','$_POST[fecha_de_venta]','$_POST[valor_total]','$_POST[tipo]','$_POST[identificacion]')";
}