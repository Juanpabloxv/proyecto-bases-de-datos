<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM empresa where nit='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: empresas.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar  la empresa";
 }
 
mysqli_close($conn);



?>