<?php
include("datos.php");

class BaseDatos{
    private $hostBD = HOST; //HOST;
    private $nameBD = NAME_BD;//NAME_BD;
    private $userBD = USER;//USER;
    private $passwordBD = PASSWORD;//PASSWORD;
    
    public $coneccion;

    function BaseDatos(){
        $this->CreateConnection();
    }

    public function CreateConnection(){
        $this->coneccion=mysqli_connect($this->hostBD,$this->userBD,$this->passwordBD,$this->nameBD);
        // if(mysqli_connect_error()){
        //     die("consulta fallida");
        // }
    }

    public function LimpiarDato($dato){
        $datoLimpio = mysqli_real_escape_string($this->coneccion,dato);
        return datoLimpio;
    }


}

?>