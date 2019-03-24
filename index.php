<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include('./classes/Vacaciones.php');
include('./frame.php');
include('./lib/constantes.php');

$_SESSION["param1"]="Este es el contenido del parámetro 1";

$array_vacaciones= new Vacaciones("1-9",
                          "Nombre TEST",
                          "Cargo TEST",
                           "24-12",
                            "25",
                            "Comentario_TEST");
$_SESSION["regvacacion"]=$array_vacaciones;

?>

<html>
    <head>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ol class="breadcrumb">
            <p>
            <li><a href="index.php">Inicio</a></li> 
            <form id="logout" method="post" action="logout.php" ><button type="submit" class="btn btn-danger">Cerrar sesión</button></form>
            </p>
        </ol>
        <?php
        
        ?>
        <!-- <div class="logout">                 -->
                
      
        <div id="contenedor">
            <div id="titulo"><?php include('./header.php'); ?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('./menu.php'); ?></div>
            <div id="contenido">
                <div class="panel">
                    <div class="container-fluid">
                        
                        <div class="jumbotron">
                            <h1 class="display-4">Hola!</h1>
                            <p class="lead">Esta es la pagina de inicio.</p>
                            <hr class="my-4">
                            <p class="lead">
                                <a class="btn btn-primary btn-lg" href="<?= URLBASE; ?>formvacaciones.php" role="button">Ingresar solicitud de vacaciones</a>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>
