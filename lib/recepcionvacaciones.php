<pre>
<?php
include('../classes/Vacaciones.php');
include('../frame.php');
include('./constantes.php');

$objVacaciones = new Vacaciones($_POST["rut"], $_POST["nombre"], $_POST["cargo"], $_POST["fechaini"], $_POST["diastotales"], $_POST["comentarios"]);
if (isset($_SESSION["aVacaciones"])) {
    $arrVacaciones = $_SESSION["aVacaciones"];
}
$arrVacaciones[] = $objVacaciones;
$_SESSION["aVacaciones"] = $arrVacaciones;

echo "<pre>";
var_dump($_POST);
echo "</pre>";
?>
</pre>