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
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
		$querys=[];
		for ($i=0; $i <(int)$_POST["numeroDetalles"] ; $i++) { }

			if(isset($_POST["detalleID".$i]) && isset($_POST["detalleCantidad".$i])){
				$detalleDueño=$_POST["detalleID".$i];
				$detalleCantidad=$_POST["detalleCantidad".$i];
				$queryIesimo="INSERT INTO DETALLES VALUES('$_POST[codigo]',".$detalleDueño.",".$detalleCantidad.")";
				$querys[]=$queryIesimo;
			}
			
		}
		var_dump($querys);die;
		


        header ("Location: facturas.php");
        
         
	}
	else{
 		echo "Ha ocurrido un error al crear una factura";
 	}



?>

