<?php

class Area{

    private $areaFiltro="";
    private $areaTitulos="";
    private $areaRegistros="";


    function Area(){

    }

    function ObtenerAreaFiltro($listaNombreCampos){
        $this->areaFiltro = "<div class='entradasFiltrar ladoA'>";
        for($a =0 ; $a < count($listaNombreCampos); $a++){
            $this->areaFiltro = $this->areaFiltro . "<input type='text' name='".$listaNombreCampos[$a]."'>";
        }

        $this->areaFiltro = $this->areaFiltro . "</div><div class='btnFiltrar ladoB'><button>FILTRAR</button></div>";

        return $this->areaFiltro;

        // <div class="entradasFiltrar ladoA">
        //     <input type="text" name="ID">
        //     <input type="text">
        //     <input type="text">
        //     <input type="text">
        //     <input type="text">
        // </div>
        // <div class="btnFiltrar ladoB">
        //     <button>FILTRAR</button>
        // </div>
    }

    function ObtenerAreaTitulos($listaNombreCampos){
        $this->areaTitulos= "<div class='nombresTitulos ladoA'>";
        for($a =0 ; $a < count($listaNombreCampos) ; $a++){
            $this->areaTitulos = $this->areaTitulos ."<h2>".$listaNombreCampos[$a]."</h2>";
        }
        $this->areaTitulos = $this->areaTitulos . "</div><div class='ladoB'><h2>ACCIONES</h2></div>";

        return $this->areaTitulos;



        // <div class="nombresTitulos ladoA">
        //     <h2>TITULO 1</h2>
        //     <h2>TITULO 1</h2>
        //     <h2>TITULO 1</h2>
        //     <h2>TITULO 1</h2>
        // </div>
        // <div class="ladoB">
        //     <h2>ACCIONES</h2>
        // </div>
    }

    function ObtenerAreaRegistros($matrizRegistros){
        $this->areaRegistros= "";

        for($a =0 ; $a < count($matrizRegistros); $a++){
            $this->areaRegistros = $this->areaRegistros . "<div class='registro'><div class='datosRegistro ladoA'>" ;
            for($b =0 ; $b < count($matrizRegistros[$a]) ; $b++){
                $this->areaRegistros = $this->areaRegistros . "<p>".$matrizRegistros[$a][$b]."</p>";
            }
            $this->areaRegistros = $this->areaRegistros . "</div><div class='botonesRegistro ladoB'><a class='acciones' href='../'>EDITAR</a><a class='acciones' href='../'>ELIMINAR</a></div></div>";
        }


        // <div class="registro">
        //     <div class="datosRegistro ladoA">
        //         <p>regitros 1</p>
        //         <p>regitros 1</p>
        //         <p>regitros 1</p>
        //         <p>regitros 1</p>
        //         <p>regitros 1</p>
        //     </div>
        //     <div class="botonesRegistro ladoB">
        //         <a class="acciones" href='../'>EDITAR</a>
        //         <a class="acciones" href='../'>ELIMINAR</a>
        //     </div>
        // </div>

        return $this->areaRegistros;

    }















}







?>

