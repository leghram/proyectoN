<?php

class Producto{
    
    private $listaCampos = array("ID","NOMBRE","RUC","DIRECCION","TELEFONO","EMAIL","ACTIVO");
    private $listaValores = array();

    public $coneccion;

    function Producto(){
        $BD = new BaseDatos();
        $this->coneccion = $BD->coneccion;
    }


}



?>
