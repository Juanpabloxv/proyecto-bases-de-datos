<!-- En esta pagina puede encontrar mas informacion acerca de la estructura de un documento html 
    http://www.iuma.ulpgc.es/users/jmiranda/docencia/Tutorial_HTML/estruct.htm-->
    <!DOCTYPE html>
<html lang="en">
<!--cabezera del html -->

<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>inicio</title>
    <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
    para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
     para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav nav-item">
            <a class="nav-link " href="../index.html">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="../personas/personas.php">Personas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="../empresas/empresas.php">Empresas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../facturas/facturas.php">Facturas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../productos/productos.php">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../busquedas/busquedas.php">Busquedas</a>
        </li>
        <li class="nav-pills">
            <a class="nav-link active" href="../consultas/consultas.php">Consultas</a>
        </li>
    </ul>
      
    <form action="consultas.php" method="post" >
        <center>
        <input type="submit" value="Buscar facturas y detalles de venta mayor que 2 " class="btn btn-info" name="boton1" 50px>
        <input type="submit" value="Busca el total de unidades vendidas de cada producto " class="btn btn-success" name="boton2" 50px>
        <input type="submit" value="Busca los datos de las empresas que nunca han comprado productos en diciembre ni enero" class="btn btn-danger" name="boton3" 50px>
        </center>
    </form >
    <?php
    $boton1="";
    $boton2="";
    $boton3="";

    if(isset($_POST['boton1']))$boton1=$_POST['boton1'];
    if(isset($_POST['boton2']))$boton2=$_POST['boton2'];
    if(isset($_POST['boton3']))$boton3=$_POST['boton3'];

    if($boton1){ 
        require('../configuraciones/conexion.php');      
        $query1="SELECT f.numero_de_factura AS f_numero_de_factura
				FROM factura f
				LEFT JOIN detalle_de_venta d ON f.numero_de_factura = d.mi_factura
				GROUP BY f.numero_de_factura
                HAVING COUNT(d.cantidad) >=2";
        $query2="SELECT p.cedula, p.nombre
        FROM persona p
        LEFT JOIN factura f ON p.cedula = f.cedula_persona
        WHERE f.numero_de_factura IN(SELECT f.numero_de_factura AS f_numero_de_factura
                           FROM factura f
                           LEFT JOIN detalle_de_venta d ON f.numero_de_factura=d.mi_factura
                           GROUP BY f.numero_de_factura
                           HAVING COUNT(d.cantidad) >=2)
        GROUP BY p.cedula
        HAVING COUNT(f.numero_de_factura) >=2";
        $result = mysqli_query($conn, $query2) or die(mysqli_error($conn));
        while($consulta = mysqli_fetch_array($result)){
            echo $consulta[0];
            echo "<br>";
        }
        mysqli_close($conn);
    
    }
    if($boton2){
    }
    if($boton3){
    }

    ?>
   
</body>   
</html>