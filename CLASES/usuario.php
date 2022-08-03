<?php
include("../CONFIG/BaseDatos.php");


class Usuario{
    
    private $nombreTabla = "USUARIOS";
    private $listaCampos = array();
    private $listaDatos = array();
    private $listaRegistros = array();

    public $cantidadCampos;
    public $coneccion;

    function Usuario(){
        $BD = new BaseDatos();
        $this->coneccion = $BD->coneccion;
        $this->EstablecerCantidadCampos();

    }

    function GenerarNombresCampos(){
        $consulta = "SELECT * FROM ". $this->nombreTabla;
        $resultados = mysqli_query($this->coneccion, $consulta);
        $campos = mysqli_fetch_fields($resultados);
        for($a=0 ; $a < count($campos); $a++){
            array_push($this->listaCampos, $campos[$a]->name);
        }
    }

    function EstablecerCantidadCampos(){
        $this->GenerarNombresCampos();
        $this->cantidadCampos = count($this->listaCampos);
    }

    function LlenarTodosRegistros(){
        $consulta = "SELECT * FROM ". $this->nombreTabla;
        $resultados = mysqli_query($this->coneccion, $consulta);
        
        while(true){
            $fila = mysqli_fetch_row($resultados);
            $arregloRegistro = array();

            if($fila){
                for($a =0 ; $a<count($fila); $a++ ){
                    array_push($arregloRegistro, $fila[$a]);
                }
            }else{
                break;
            }
            array_push($this->listaRegistros,$arregloRegistro);
        }
    }

    function AgregarDatosObjeto($id){
        $this->listaDatos = array();
        $consulta = "SELECT * FROM ". $this->nombreTabla." WHERE ID = '".$id."'";
        $resultados = mysqli_query($this->coneccion,$consulta);
        $registroObtenido = mysqli_fetch_row($resultados);
        for($i =0 ; $i < $this->cantidadCampos; $i++){
            array_push($this->listaDatos, $registroObtenido[$i]);
        }
    }


    function ObtenerNombresCampos(){
        return $this->listaCampos;
    }

    function ObtenerRegistroSegunID($id){
        $this->AgregarDatosObjeto($id);
        return $this->listaDatos;
    }

    function ObtenerTodosLosRegistros(){
        $this->LlenarTodosRegistros();
        return $this->listaRegistros;
    }

    
    function EliminarRegistro($id){
        $consulta = "DELETE FROM ". $this->nombreTabla ." WHERE ID = '".$id."'";
        if(mysqli_query($this->coneccion,$consulta)){
            return 1;
        }else{
            return 0;
        }
    }


}





$ejemplo = new Cliente();






echo "HOLA";








// include("../CONFIG/BaseDatos.php");

// $objetoBD = new BaseDatos();

// $consulta = "SELECT * FROM USUARIOS";


// $registros = mysqli_query($objetoBD->coneccion,$consulta);

// $registro = mysqli_fetch_row($registros);


// echo $registro[1];



?>

