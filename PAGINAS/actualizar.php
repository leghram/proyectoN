<?php
include("../MODULOS/menu.php");
include("../CLASES/area.php");

include("../CLASES/ado.php");

$idActualizar = $_GET["ID"];
$objGenerador = new Ado($_SERVER["HTTP_REFERER"]);
$objEntidad = $objGenerador->ObtenerObjeto();

$nombrePagina = $objGenerador->ObtenerNombreTabla();
// $nombrePagina = "CATEGORIAS";

$titulosRegistroActualizar = $objEntidad->ObtenerNombresCampos();
$datosRegistrosActualizar= $objEntidad->ObtenerRegistroSegunID($idActualizar);



$objArea = new Area();




include("../MODULOS/header.php");
?>

<div class="pagina">
    <div class="navegacion">
        <div class="menu">
            <?php
                for($i =0 ; $i < count($listaEnlaces); $i++){
                    if($listaMenus[$i] == $nombrePagina){
                        echo "<a class='enlace activo' href='../PAGINAS/".strtolower($nombrePagina).".php'>".$nombrePagina."</a>";
                    }else{
                        echo $listaEnlaces[$i] . $listaMenus[$i] . "</a>";
                    }   
                }
            ?>
        </div>
    </div>

    <div class="principal">
        <div class="paginaFormulario">
            <form action="">
                <div>
                    <div class="labelsFormulario">
                        <label>TEXTO</label>
                    </div>
                    <div class="datosFormulario">
                        <input type="text">
                    </div>
                </div>
                <div>
                    <button>ENVIAR</button>
                    <a>SALIR</a>
                </div>
                
            </form>

        </div>
        <?php
            echo $nombrePagina;
            echo "<br>";
            echo $datosRegistrosActualizar[2];
        ?>
    </div>



</div>
<?php
    include("../MODULOS/footerform.php");
?>




