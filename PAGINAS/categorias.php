<?php
include("../MODULOS/menu.php");
include("../CLASES/categoria.php");
include("../CLASES/area.php");

$nombrePagina = "CATEGORIAS";

$objCategoria = new Categoria();

$datosTitulos = $objCategoria->ObtenerNombresCampos();
$datosRegistros = $objCategoria->ObtenerTodosLosRegistros();

$objArea = new Area();

// $zonaFiltros = $objArea->ObtenerAreaFiltro($datosTitulos);
$zonaTitulos = $objArea->ObtenerAreaTitulos($datosTitulos);
$zonaRegistros = $objArea->ObtenerAreaRegistros($datosRegistros);



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
                <!-- zona ELIMINADA DE  // AREA DE FILTROS SE PUDE REVISAR EN LA CLASE AREA -->
        <div class="areaTitulos">
            <?php  echo $zonaTitulos  ?>
        </div>
        <div class="areaRegistros">
            <?php  echo $zonaRegistros  ?>
        </div>
    </div>



</div>
<?php
    include("../MODULOS/footer.php");
?>




