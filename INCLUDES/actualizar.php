<?php
include("../CLASES/ado.php");

$idActualizar = $_GET["ID"];
$objGenerador = new Ado($_SERVER["HTTP_REFERER"]);
$objEntidad = $objGenerador->ObtenerObjeto();

$nombrePagina = $objGenerador->ObtenerNombreTabla();
// $nombrePagina = "CATEGORIAS";

$titulosRegistroActualizar = $objEntidad->ObtenerNombresCampos();
$datosRegistrosActualizar= $objEntidad->ObtenerRegistroSegunID($idActualizar);


// header("Location: ../PAGINAS/actualizar.php");







?>