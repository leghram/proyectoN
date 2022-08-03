<?php

class Categoria{
    
    private $listaCampos = array("ID","NOMBRE","RUC","DIRECCION","TELEFONO","EMAIL","ACTIVO");
    private $listaValores = array();

    public $coneccion;

    function Categoria(){
        $BD = new BaseDatos();
        $this->coneccion = $BD->coneccion;
    }


}



?>
