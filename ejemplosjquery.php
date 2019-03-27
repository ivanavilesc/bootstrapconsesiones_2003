<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>



<html>
    <head>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <script type="text/javascript">
        // Este Javascript, utiliza una función, para mostrar un texto, donde se emplaza div llamado ejemplo.
        $(document).ready(function(){
        $('#ejemplo').text("Soy un texto generado por jQuery!");
            });
        </script>
            
        <script type="text/javascript">
            // Ahora al momento de poner el mouse encima de la DIV capa, se ejecutará una funcion
            // que mostrará en el DIV mensaje
            $("#capa").mouseenter()(function (evento) {
                $("#mensaje").css("display", "block");
            });
            $("#capa").mouseleave(function (evento) {
                $("#mensaje").css("display", "none");
            });
        </script>        

    </head>
    <body>

        <div id="ejemplo">
        </div>
        <br>
        <div id="capa" style="padding: 10px; background-color: #ff8800">Haz clic en un botón</div>
        
        <input type="button" value="Botón A" onclick="$('#capa').html('Has hecho clic en el botón <b>A</b>')">
        <input type="button" value="Botón B" onclick="$('#capa').html('Recibido un clic en el botón <b>B</b>')">
        <br>
        <div id="capa2" style="padding: 10px; background-color: #ff8800;">Pon el ratón encima de esta capa</div>
        <br>
        <br>
        <br>
        
<br>
<div id="mensaje" style="display: none;">Has puesto el ratón encima!! <br>(Ahora quítalo de la capa)</div>


    </body>

</html>
