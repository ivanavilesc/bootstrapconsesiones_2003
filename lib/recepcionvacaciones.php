<?php
include('../classes/Vacaciones.php');
include('../lib/constantes.php');
include('../frame.php');

$oVacaciones=new Vacaciones($_POST["rut"], $_POST["nombre"], $_POST["cargo"], "", "", "");
if(isset($_SESSION["aVacaciones"])){
    $arrVacaciones=$_SESSION["aVacaciones"];    
}
$arrVacaciones[]=$oVacaciones;
$_SESSION["aVacaciones"]=$arrVacaciones;    
?>


<html>
    <head>
        
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>            
            <li class="active">Recepción</li>
        </ol>
        <?php
        
        ?>
        
        <div id="contenedor">
            <div id="titulo"><?php include('header.php');?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('menu.php');?></div>
            <div id="contenido">
                <?php
                echo "<pre>";
                var_dump($_POST);
                echo "</pre>";
                ?>
                
            </div>
        </div>
        <pre>
        
</pre>
    </body>
</html>





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

