<?php
include("../MODULOS/menu.php");
include("../CLASES/area.php");

include("../CLASES/ado.php");

// $idAgregar = $_GET["ID"];
$objGenerador = new Ado($_SERVER["HTTP_REFERER"]);
$objEntidad = $objGenerador->ObtenerObjeto();

$nombrePagina = $objGenerador->ObtenerNombreTabla();
// $nombrePagina = "CATEGORIAS";

$titulosRegistroActualizar = $objEntidad->ObtenerNombresCampos();
// $datosRegistrosActualizar= $objEntidad->ObtenerRegistroSegunID($idAgregar);



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
            <h2>AGREGANDO <?php echo $nombrePagina ?></h2>
            <form action="../INCLUDES/proces<?php echo strtolower($nombrePagina)?>.php" method ="POST" class="zonaFormulario">
                <div class="zonaData">

                    <?php
                        echo $objArea->ObtenerFormularioAgregar($titulosRegistroActualizar);
                    ?>

                    <!-- <div class="labelsFormulario">
                        <label>TEXTO</label>
                    </div>
                    <div class="inputsFormulario">
                        <input type="text">
                    </div> -->
                </div>
                <div>
                    <button class="btnModificacion">ENVIAR</button>
                    <a class="btnModificacion" href="../PAGINAS/<?php echo strtolower($nombrePagina)?>.php">SALIR</a>
                </div>
                
            </form>

        </div>
    </div>



</div>
<?php
    include("../MODULOS/footerform.php");
?>




