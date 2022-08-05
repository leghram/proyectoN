<?php

class Area{

    private $areaFiltro="";
    private $areaTitulos="";
    private $areaRegistros="";
    private $areaFormulario="";

    function Area(){

    }

    // function ObtenerAreaFiltro($listaNombreCampos){
    //     $this->areaFiltro = "<div class='entradasFiltrar ladoA'>";
    //     for($a =0 ; $a < count($listaNombreCampos); $a++){
    //         $this->areaFiltro = $this->areaFiltro . "<input type='text' name='".$listaNombreCampos[$a]."'>";
    //     }

    //     $this->areaFiltro = $this->areaFiltro . "</div><div class='btnFiltrar ladoB'><button>FILTRAR</button></div>";

    //     return $this->areaFiltro;

    //     // <div class="entradasFiltrar ladoA">
    //     //     <input type="text" name="ID">
    //     //     <input type="text">
    //     //     <input type="text">
    //     //     <input type="text">
    //     //     <input type="text">
    //     // </div>
    //     // <div class="btnFiltrar ladoB">
    //     //     <button>FILTRAR</button>
    //     // </div>
    // }

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
            $idRegistro="";
            $this->areaRegistros = $this->areaRegistros . "<div class='registro'><div class='datosRegistro ladoA'>" ;
            for($b =0 ; $b < count($matrizRegistros[$a]) ; $b++){
                if($b==0){
                    $idRegistro = "".$matrizRegistros[$a][$b];
                }
                $this->areaRegistros = $this->areaRegistros . "<p>".$matrizRegistros[$a][$b]."</p>";
            }
            $this->areaRegistros = $this->areaRegistros . "</div><div class='botonesRegistro ladoB'><a class='acciones' href='../PAGINAS/actualizar.php?ID=".$idRegistro."''>EDITAR</a><a class='acciones' href='../INCLUDES/eliminar.php?ID=".$idRegistro."'>ELIMINAR</a></div></div>";
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

    function ObtenerFormulario($listaNombreCampos, $listaDatos){
        $labels = "<div class='labelsFormulario'>";
        $inputs = "<div class='inputsFormulario'>";
        for($a = 0 ; $a < count($listaNombreCampos); $a++){
            $labels = $labels . "<label>".$listaNombreCampos[$a]."</label>";
            $inputs = $inputs . "<input class='actualizando' type='text' name='".$listaNombreCampos[$a]."' value = '".$listaDatos[$a]."'>";
        }
        $labels = $labels . "</div>";
        $inputs = $inputs . "</div>";

        return $labels . $inputs;
    }

    // <div class="labelsFormulario">
    //     <label>TEXTO</label>
    // </div>
    // <div class="datosFormulario">
    //     <input type="text" value ="VALOR" class="actualizando">
    // </div>


    
    function ObtenerFormularioAgregar($listaNombreCampos){
        $labels = "<div class='labelsFormulario'>";
        $inputs = "<div class='inputsFormulario'>";
        for($a = 0 ; $a < count($listaNombreCampos); $a++){
            $labels = $labels . "<label>".$listaNombreCampos[$a]."</label>";
            $inputs = $inputs . "<input class='actualizando' type='text' name='".$listaNombreCampos[$a]."'>";
        }
        $labels = $labels . "</div>";
        $inputs = $inputs . "</div>";

        return $labels . $inputs;
    }













}







?>

