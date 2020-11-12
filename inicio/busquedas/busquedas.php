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
        <li class="nav-pills">
            <a class="nav-link active" href="../busquedas/busquedas.php">Busquedas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../consultas/consultas.php">Consultas</a>
        </li>
    </ul>
    <div class="container">
        <div class="row my-2">
            <div class="col-6">
                <p>Para realizar una busqueda de facturas primero selecciones los parametros de la busqueda.</p>
                <form action="buscar.php" target="_blank"  method="POST">
                    <div class="row">
                        <div class="form-group">
                            <label for="">Parametro:</label>
                            <div class="form-check">
                                <input class="form-check-input" onclick="cambioCliente(this);" type="radio" name="exampleRadios2" id="exampleRadios2"
                                    value="empresa" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                Busquedas Empresas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" onclick="cambioCliente(this);" type="radio" name="exampleRadios2" id="exampleRadios2"
                                    value="persona">
                                <label class="form-check-label" for="exampleRadios2">
                                    Busquedas Personas
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" id="selectPersonas"> 
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="text"
                                        class="form-control"  name="codigo_p" id="codigo_p" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Codigo persona</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="text"
                                        class="form-control" name="codigo_pr" id="codigo_pr" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Codigo Producto</small>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    
                    <div class="row" id="selectEmpresas">
                        <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="text"
                                            class="form-control"  name="nit_e" id="nit_e" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">NIT</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date"
                                            class="form-control" name="fecha_i" id="fecha_i" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Fecha Inicial</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date"
                                            class="form-control" name="fecha_f" id="fecha_f" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Fecha Final</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col justify-content-center mx auto">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                    </div>    
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
                            
                            
                            <!--librerias para usar jquery-->
                            
                             <!--controlador de los tipo radio-->
                            <script>
                                $("#selectPersonas").hide();
                                function cambioCliente(myRadio) {
                                    $('input[type=radio][name=exampleRadios2]').change(function() {
                                        console.log(myRadio.value);
                                        if (myRadio.value==="persona") {
                                            $("#selectPersonas").show();
                                            $("#selectEmpresas").hide();
                                        }
                                        else {
                                            $("#selectPersonas").hide();
                                            $("#selectEmpresas").show();
                                        }
                                        $('#identificacion1').prop('selectedIndex',0);
                                        $('#identificacion2').prop('selectedIndex',0);
                                    });
                                   

                                }
                            </script>           
                </form>
            </div>           
        </div>
    </div>


</body>

</html>