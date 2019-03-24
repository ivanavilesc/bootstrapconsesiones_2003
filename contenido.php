<?php
include('./frame.php');
include('./lib/constantes.php');
include('./classes/Vacaciones.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>            
            <li class="active">Contenido</li>
        </ol>
        <div id="contenedor">
            <div id="titulo"><?php include('header.php'); ?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('menu.php'); ?></div>
            <div id="contenido">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Ingreso de Datos</h3></div>

                    <!-- Table -->
                    <table class="table" border="0">                     
                        <tbody>                        
                            <tr>
                                <td>Nombre</td>
                                <td><input type="text"> </td>
                            </tr>
                            <tr>
                                <td>Rut</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Edad</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Dirección</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Radio button</td>
                                <td> <input type="radio" name="grp-ing1" aria-label="Op1"> Opcion1 &nbsp
                                <input type="radio" name="grp-ing1" aria-label="Op2"> Opcion 2
                                </td>
                            </tr>
                            <tr>
                                <td>Checkbox</td>
                                <td> <input type="checkbox" aria-label="chk_opc1">&nbsp &nbsp Esto es un checkbox ? </td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-primary">Guardar cambios</button></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </body>
</html>


<?php
