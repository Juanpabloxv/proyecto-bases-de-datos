<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE empresa SET nombre='$_POST[nombre]',direccion='$_POST[direccion]',ciudad'$_POST[ciudad]',telefono='$_POST[telefono]'= WHERE nit='$_POST[nit]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: empresas.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  la empresa";
 }
 
mysqli_close($conn);



?>