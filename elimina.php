<?php  
include('./classes/Vacaciones.php');
include('./frame.php');
include('./lib/constantes.php');
?>

<html>
    <head>
       
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="<?=URLBASE;?>index.php">Inicio</a></li>            
            <li class="active">Elimina solicitud</li>
        </ol>
        <div id="contenedor">
            <div id="titulo"><?php include('header.php'); ?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('menu.php'); ?></div>
            <div id="contenido">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Elimina solicitud</h3></div>

                    <!-- Table -->
                    <form class="vacaciones form-horizontal" id="eliminarut" action="<?=URLBASE;?>lib/procesoeliminar.php" method="post">
                        <table class="table" border="0">                     
                            <tbody>
                            
                                <tr>
                                    <td>RUT</td>
                                    <td><input type="text" id="rut" name="rut" size="50"> </td>
                                    <td><button type="submit" class="btn btn-danger">Eliminar este rut !</button></td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </form> 
                </div>

            </div>
        </div>
    </body>
