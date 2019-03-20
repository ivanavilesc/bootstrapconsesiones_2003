<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include('frame.php');
include('lib/constantes.php');
include('classes/Vacaciones.php');

$_SESSION["param1"]="Este es el contenido del parámetro 1";

$arr_vacaciones= new Vacaciones("1-9",
                          "TEST",
                          "CARGO TEST",
                           "",
                            "",
                            "");
$_SESSION["regvacacion"]=$arr_vacaciones;

?>

<html>
    <head>
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
        </ol>
        <?php
        
        ?>
        
        <div id="contenedor">
            <div id="titulo"><?php include('header.php');?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('menu.php');?></div>
            <div id="contenido"></div>
        </div>
        
    </body>
</html>
