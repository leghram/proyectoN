<?php

class Proveedor{
    
    private $listaCampos = array("ID","NOMBRE","RUC","DIRECCION","TELEFONO","EMAIL","ACTIVO");
    private $listaValores = array();

    public $coneccion;

    function Proveedor(){
        $BD = new BaseDatos();
        $this->coneccion = $BD->coneccion;
    }


}



?>