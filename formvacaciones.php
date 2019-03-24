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
                    <form class="vacaciones form-horizontal" action="<?=URLBASE;?>lib/recepcionvacaciones.php" method="post">
                        <table class="table" border="0">                     
                            <tbody>
                                <tr>
                                    <td>RUT</td>
                                    <td><input type="text" id="rut" name="rut" size="50"> </td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td><input type="text" id="nombre" name="nombre" size="50"> </td>
                                </tr>
                                <tr>
                                    <td>Cargo</td>
                                    <td><input type="text" id="cargo" name="cargo" size="50"></td>
                                </tr>
                                <tr>
                                    <td>Fecha de inicio</td>
                                    <td><input type="text" id="fechaini" name="fechaini"></td>
                                </tr>
                                <tr>
                                    <td>Dias totales</td>
                                    <td><input type="text" id="diastotales" name="diastotales"></td>
                                </tr>
                                <tr>
                                    <td>Comentarios</td>
                                    <td><textarea class="form-control" id="comentarios" name="comentarios"></textarea></td>
                                    <!--<td><textarea class="form-control" id="message-text" name="comentarios"></textarea></td> -->
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

        <pre>
        <?php
            echo "<pre>";
            var_dump($_SESSION["aVacaciones"]);
            echo "</pre>";
            /*
            if(isset($_SESSION["aVacaciones"])){
                $arrVacaciones=$_SESSION["aVacaciones"];    
            }
            foreach($arrVacaciones as $vac){
                var_dump($_POST);
            }        
            var_dump($_SESSION["regvacacion"]);
        
             * 
             */
            foreach ($_SESSION["aVacaciones"] as $key => $oVacacion) {
                if ($oVacacion->getRut()=="3"){
                    unset($_SESSION["aVacaciones"][$key]);
                }
            }
        ?>
             
        </pre>
        
    </body>
    
    <script>
        $("#subsolicitud").show();
        $("#subsolicitud").addClass("active");
        $("#subsolicitud").css("display","block");
        $('[data-toggle="tooltip"]').tooltip();
    </script>
    
</html>
