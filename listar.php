
<?php
include('./frame.php');
include('./lib/constantes.php');
include('./classes/Vacaciones.php');
?>

<html>
    <head>
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>            
            <li class="active">Listar</li>
        </ol>
        <?php
        
        ?>
        
        <div id="contenedor">
            <div id="titulo"><?php include('header.php');?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('menu.php');?></div>
            <div id="contenido">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Rut</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Fec. Inicio</th>
                            <th scope="col">Dias</th>
                            <th scope="col">Comentario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        
                    </tbody>
                </table>
                    
                
            </div>
        </div>
        <pre>
            <?php
        var_dump($_SESSION["regvacacion"]);
        ?>
</pre>
    </body>
</html>



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

