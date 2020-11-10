<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM producto where codigo_de_barras='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: productos.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el producto";
 }
 
mysqli_close($conn);



?>