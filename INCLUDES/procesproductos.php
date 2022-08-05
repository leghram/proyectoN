<?php
include("../CLASES/general.php");

$nombreProceso = "PRODUCTOS";
$objetoEntidad = new General($nombreProceso);
$operacion;

$listaCamposTabla = $objetoEntidad->ObtenerNombresCampos();

$nom1 = $listaCamposTabla[0];
$nom2 = $listaCamposTabla[1];
$nom3 = $listaCamposTabla[2];
$nom4 = $listaCamposTabla[3];
$nom5 = $listaCamposTabla[4];
$nom6 = $listaCamposTabla[5];
$nom7 = $listaCamposTabla[6];



if(strpos($_SERVER["HTTP_REFERER"],"actualizar")){
    $operacion = "actualizar";
}else if(strpos($_SERVER["HTTP_REFERER"],"agregar")){
    $operacion = "agregar";
}else{
    $operacion = "filtrar";
}

$dato1 = $_POST[$nom1];
$dato2 = $_POST[$nom2];
$dato3 = $_POST[$nom3];
$dato4 = $_POST[$nom4];
$dato5 = $_POST[$nom5];
$dato6 = $_POST[$nom6];
$dato7 = $_POST[$nom7];




$crearConsulta = "UPDATE ".$nombreProceso." SET ".$nom2." = '".$dato2."', ".$nom3." = '".$dato3."', ".$nom4." = '".$dato4."', ".$nom5." = '".$dato5."', ".$nom6." = '".$dato6."', ".$nom7." = '".$dato7."' WHERE ID = '".$dato1."'";

if($objetoEntidad->ActualizarRegistro($crearConsulta)){
    header("Location: ../PAGINAS/".strtolower($nombreProceso).".php");
}else{
    header("Location: ../PAGINAS/".strtolower($nombreProceso).".php");
}

echo "final de actualizar ";
echo $dato1;
echo "CATEGORIAS ";
echo $operacion;
echo "<br>";
echo $crearConsulta;

// $idActualizar = $_GET["ID"];
// 
// $objEntidad = $objGenerador->ObtenerObjeto();

// $nombrePagina = $objGenerador->ObtenerNombreTabla();
// // $nombrePagina = "CATEGORIAS";

// $titulosRegistroActualizar = $objEntidad->ObtenerNombresCampos();
// $datosRegistrosActualizar= $objEntidad->ObtenerRegistroSegunID($idActualizar);


// header("Location: ../PAGINAS/actualizar.php");
// $objGenerador = new Ado($_SERVER["HTTP_REFERER"]);




?>