
<?php
include('./classes/Vacaciones.php'); 
include('./lib/constantes.php');
include('./frame.php');

?>

<html>
    <head>
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>            
            <li class="active">Listar</li>
        </ol>

        <div id="contenedor">
            
            <div id="titulo"><?php include('./header.php'); ?></div>
            <!-- Se puede hacer un include dentro de un DIV, mientras se abra un TAG para codigo PHP-->
            <div id="menu"><?php include('./menu.php'); ?></div>
            <div id="contenido">
                <h2>Listado de Vacaciones</h2>
                <table class="table table-striped">
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
                        <?php
                        if (isset($_SESSION["aVacaciones"])) {
                            $arrVacaciones = $_SESSION["aVacaciones"];
                            foreach ($arrVacaciones as $objVacacion) {
                                echo "<tr>";
                                echo "<td>" . $objVacacion->getRut() . "</td>";
                                echo "<td>" . $objVacacion->getNombre() . "</td>";
                                echo "<td>" . $objVacacion->getCargo() . "</td>";
                                echo "<td>" . $objVacacion->getFecinicio() . "</td>";
                                echo "<td>" . $objVacacion->getDias() . "</td>";
                                echo "<td>" . $objVacacion->getComentario() . "</td>";
                                echo "</tr>";
                            }
                        } else {
                                echo "<div class='alert alert-warning' role='alert'>
                                        No hay elementos en el arreglo !
                                </div>";
                        }
                        
                        ?>
                       
                    </tbody>
                </table>

            </div> 

        </div>

    </body>
</html>
