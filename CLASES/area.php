<?php

class Area{

    private $areaFiltro="";
    private $areaTitulos="";
    private $areaRegistros="";


    function Area(){

    }

    function ObtenerAreaFiltro($listaNombreCampos){
        $this->areaFiltro = "<div class='entradasFiltrar'>";
        for($a =0 ; $a < count($listaNombreCampos); $a++){
            $this->areaFiltro = $this->areaFiltro . "<input type='text' name='".$listaNombreCampos[$a]."'>";
        }

        $this->areaFiltro = $this->areaFiltro . "</div><div class='btnFiltrar'><button>FILTRAR</button></div>";

        return $this->areaFiltro;

        // <div class="entradasFiltrar">
        //     <input type="text" name="ID">
        //     <input type="text">
        //     <input type="text">
        //     <input type="text">
        //     <input type="text">
        // </div>
        // <div class="btnFiltrar">
        //     <button>FILTRAR</button>
        // </div>
    }

    function ObtenerAreaTitulos($listaNombreCampos){
        $this->areaTitulos= "<div class='nombresTitulos'>";
        for($a =0 ; $a < count($listaNombreCampos) ; $a++){
            $this->areaTitulos = $this->areaTitulos ."<h2>".$listaNombreCampos[$a]."</h2>";
        }
        $this->areaTitulos = $this->areaTitulos . "</div><div><h2>ACCIONES</h2></div>";

        return $this->areaTitulos;



        // <div class="nombresTitulos">
        //     <h2>TITULO 1</h2>
        //     <h2>TITULO 1</h2>
        //     <h2>TITULO 1</h2>
        //     <h2>TITULO 1</h2>
        // </div>
        // <div>
        //     <h2>ACCIONES</h2>
        // </div>
    }

    function ObtenerAreaRegistros($todosLosRegistros){

    }















}







?>

