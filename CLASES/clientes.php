<?php

class Cliente{
    
    private $listaCampos = array("ID","NOMBRE","RUC","DIRECCION","TELEFONO","EMAIL","ACTIVO");
    private $listaValores = array();

    public $coneccion;

    function Cliente(){
        $BD = new BaseDatos();
        $this->coneccion = $BD->coneccion;
    }


}


















include("../CONFIG/BaseDatos.php");

$objetoBD = new BaseDatos();

$consulta = "SELECT * FROM USUARIOS";


$registros = mysqli_query($objetoBD->coneccion,$consulta);

$registro = mysqli_fetch_row($registros);


echo $registro[1];



?>

