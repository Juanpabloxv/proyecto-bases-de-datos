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
        <li class="nav-pills">
            <a class="nav-link active" href="../productos/productos.php">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../busquedas/busquedas.php">Busquedas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../consultas/consultas.php">Consultas</a>
        </li>
    </ul>
    <div class="container mt-3">
        <div class="row">
            <?php
                if(isset($_GET["codigo_de_barras"])){
             ?>
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Editar Producto
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="update_p.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo_de_barras">Codigo de barras</label>
                                <input type="text" readonly name="codigo_de_barras" value=<?=$_GET["codigo_de_barras"];?> id="codigo_de_barras"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" value='<?=$_GET["nombre"];?>' id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tamaño</label>
                                <input type="text" name="tamaño" value='<?=$_GET["tamaño"];?>' id="tamaño" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Color</label>
                                <input type="text" name="color" value='<?=$_GET["color"];?>' id="color" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Valor de venta</label>
                                <input type="text" name="valor_de_venta" value=<?=$_GET["valor_de_venta"];?> id="valor_de_venta" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Material de diseño</label>
                                <input type="text" name="material_de_diseño" value=<?=$_GET["material_de_diseño"];?> id="material_de_diseño" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                                <a href="productos.php" class="btn btn-danger">descartar</a>
                                
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <?php
           }
        else{
             ?>
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Insertar Productos
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="insert_p.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo_de_barras">Codigo de barras</label>
                                <input type="text" name="codigo_de_barras" id="codigo_de_barras" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tamaño</label>
                                <input type="text" name="tamaño" id="tamaño" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Color</label>
                                <input type="text" name="color" id="color" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Valor de venta</label>
                                <input type="text" name="valor_de_venta" id="valor_de_venta" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Material de diseño</label>
                                <input type="text" name="material_de_diseño" id="material_de_diseño" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="insertar">
                                <a href="productos.php" class="btn btn-success">Reiniciar</a>
                            </div>
                            

                        </form>

                    </div>
                </div>
            </div>

            <?php
        }
        ?>
            <div class="col-6 px-2">

                <table class="table border-rounded">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Codigo de barras</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tamaño</th>
                            <th scope="col">Color</th>
                            <th scope="col">Valor de venta</th>
                            <th scope="col">Material de diseño</th>
                            <th scope="col">Opciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require('select_p.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['codigo_de_barras'];?></td>
                            <td><?=$fila['nombre'];?></td>

                            <td><?=$fila['tamaño'];?></td>
                            <td><?=$fila['color'];?></td>

                            <td><?=$fila['valor_de_venta'];?></td>
                            <td><?=$fila['material_de_diseño'];?></td>
                            <td>

                                <form action="delete_p.php" method="POST">
                                    <input type="text" value=<?=$fila['codigo_de_barras'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['codigo_de_barras'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="productos.php" method="GET">
                                    
                                    <input type="text" name="codigo_de_barras" value=<?=$fila['codigo_de_barras'];?> hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                    <input type="text" name="tamaño" value='<?=$fila['tamaño'];?>' hidden>
                                    <input type="text" name="color" value='<?=$fila['color'];?>' hidden>
                                    <input type="text" name="valor_de_venta" value=<?=$fila['valor_de_venta'];?> hidden>
                                    <input type="text" name="material_de_diseño" value='<?=$fila['material_de_diseño'];?>' hidden>

                                    <button class="btn btn-primary" title="editar" type="submit"><i
                                            class="far fa-edit"></i></button>
                                </form>
                            </td>



                        </tr>
                        <?php                    

                                }
                            }
                            
                            ?>
                    </tbody>
                </table>

            </div>
        </div>


    </div>




</body>

</html>