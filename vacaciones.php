<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>            
            <li class="active">Formulario vacaciones</li>
        </ol>
        <div id="contenedor">
            <div id="titulo"><?php include('header.php'); ?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('menu.php'); ?></div>
            <div id="contenido">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Formulario de Vacaciones</h3></div>

                    <!-- Table -->
                    <form action="contenido.php" method="get">
                        <table class="table" border="0">                     
                            <tbody>                        
                                <tr>
                                    <td>Nombre</td>
                                    <td><input type="text" size="50"> </td>
                                </tr>
                                <tr>
                                    <td>Cargo</td>
                                    <td><input type="text" size="50"></td>
                                </tr>
                                <tr>
                                    <td>Fecha de inicio</td>
                                    <td><input type="date"></td>
                                </tr>
                                <tr>
                                    <td>Dias totales</td>
                                    <td><input type="number"></td>
                                </tr>
                                <tr>
                                    <td>Comentarios</td>
                                    <td><textarea class="form-control" id="message-text"></textarea></td>
                                </tr>
                                <tr>
                                    <td><button type="submit" class="btn btn-success">Guardar formulario</button></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </form> 
                </div>

            </div>
        </div>

    </body>
</html>


<?php
