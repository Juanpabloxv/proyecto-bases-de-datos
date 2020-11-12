<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE producto SET cantidad='$_POST[cantidad]',valor='$_POST[valor]' WHERE mi_producto='$_POST[mi_producto]',mi_factura='$_POST[mi_factura]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: factura.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  la persona";
 }
 
mysqli_close($conn);



?>