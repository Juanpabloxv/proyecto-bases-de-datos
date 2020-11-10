<?php
 
// Create connection
require('../configuraciones/conexion.php');

$codigo_de_barras = $_POST["codigo_de_barras"];

//query
if($codigo_de_barras<0){
	echo "codigo_de_barras debe ser positiva";
}

else{
	$query="INSERT INTO `producto`(`codigo_de_barras`,`nombre`, `tamaño`, `color`, `valor_de_venta`,`material_de_diseño`)
 	VALUES ('$_POST[codigo_de_barras]','$_POST[name]','$_POST[tamaño]','$_POST[color]','$_POST[valor_de_venta]','$_POST[material_de_diseño]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: productos.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear el producto";
 	}


}

?>
