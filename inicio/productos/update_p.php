<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE producto SET nombre='$_POST[nombre]',tamaño='$_POST[tamaño]',color='$_POST[color]',valor_de_venta='$_POST[valor_de_venta]',material_de_diseño='$_POST[material_de_diseño]' WHERE codigo_de_barras='$_POST[codigo_de_barras]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: productos.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  el producto";
 }
 
mysqli_close($conn);



?>