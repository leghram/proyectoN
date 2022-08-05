<?php
include("../CLASES/general.php");

$nombreProceso = "CATEGORIAS";
$objetoEntidad = new General($nombreProceso);
$operacion;

$listaCamposTabla = $objetoEntidad->ObtenerNombresCampos();

$nom1 = $listaCamposTabla[0];
$nom2 = $listaCamposTabla[1];
$nom3 = $listaCamposTabla[2];


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


if($operacion == "actualizar"){
    $crearConsulta = "UPDATE ".$nombreProceso." SET ".$nom2." = '".$dato2."', ".$nom3." = '".$dato3."' WHERE ID = '".$dato1."'";

    if($objetoEntidad->ActualizarRegistro($crearConsulta)){
        header("Location: ../PAGINAS/".strtolower($nombreProceso).".php");
    }else{
        header("Location: ../PAGINAS/".strtolower($nombreProceso).".php");
    }    
}else if($operacion == "agregar"){
    
    $crearConsulta = "INSERT INTO ".$nombreProceso." VALUES ('".$dato1."','".$dato2."','".$dato3."')";

    if($objetoEntidad->AgregarRegistro($crearConsulta)){
        header("Location: ../PAGINAS/".strtolower($nombreProceso).".php");
    }else{
        header("Location: ../PAGINAS/".strtolower($nombreProceso).".php");
    }  
}else{
    // $orden = 0;
    // SELECT * FROM TABLA WHERE A= 'B' AND A ='B' AND A= 'B' 
    // $crearConsulta = "SELECT * FROM ".$nombreProceso." WHERE ";

    // if($dato1 != ""){
    //     if($orden>1){
    //         $crearConsulta = $crearConsulta . " AND ";
    //     }
    //     $orden++;
    // }
    echo "esto es otra area";
}



// echo "final de actualizar ";
// echo $dato1;
// echo "CATEGORIAS ";
// echo $operacion;
// echo "<br>";
// echo $crearConsulta;



?>














<!-- 

// $idActualizar = $_GET["ID"];
// 
// $objEntidad = $objGenerador->ObtenerObjeto();

// $nombrePagina = $objGenerador->ObtenerNombreTabla();
// // $nombrePagina = "CATEGORIAS";

// $titulosRegistroActualizar = $objEntidad->ObtenerNombresCampos();
// $datosRegistrosActualizar= $objEntidad->ObtenerRegistroSegunID($idActualizar);


// header("Location: ../PAGINAS/actualizar.php");
// $objGenerador = new Ado($_SERVER["HTTP_REFERER"]);
 -->

