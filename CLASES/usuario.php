<?php

class Usuario{
    
    private $listaCampos = array("ID","NOMBRE","RUC","DIRECCION","TELEFONO","EMAIL","ACTIVO");
    private $listaValores = array();

    public $coneccion;

    function Usuario(){
        $BD = new BaseDatos();
        $this->coneccion = $BD->coneccion;
    }


}



?>
