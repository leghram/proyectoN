<?php
include ("../CLASES/ado.php");

// $tabla = $_SERVER["HTTP_REFERER"];
$idEliminar = $_GET["ID"];

$objGenerador = new Ado($_SERVER["HTTP_REFERER"]);

$nombreTabla = $objGenerador->ObtenerNombreTabla();
$objEntidad = $objGenerador->ObtenerObjeto();

$consulta = "DELETE FROM ". $nombreTabla ." WHERE ID = '".$idEliminar."'";

// $eliminacion = $objEntidad->EliminarRegistro($idEliminar);

if($objGenerador->EliminarConAdo($idEliminar)){
    header("Location: ../PAGINAS/".strtolower($nombreTabla).".php");
}else{
    echo $_SERVER["HTTP_REFERER"];
    echo "<br>";
    // echo "<br>";
    // echo $objEntidad->ObtenerNombresCampos()[2];
    // echo "<br>";
    // echo "<br>";

    // echo $objEntidad->EliminarRegistro($objEntidad->ObtenerRegistroSegunID($idEliminar)[0]);
    // echo "<br>";
    // echo $objEntidad->ConseguirData();
    // echo "<br>";
    // echo $idEliminar;
    // echo "<br>";
    // echo "no se pudo eliminar";
    // echo "<br>";
    // echo $consulta;
    // echo $nombreTabla;
    
    header("Location: ../PAGINAS/".strtolower($nombreTabla).".php");
}

// echo $eliminacion;
// echo "<br>";

// echo $tabla;











?>