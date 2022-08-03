<?php
include("../MODULOS/menu.php");

$nombrePagina = "CATEGORIAS";





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

    </div>
</div>
<?php
    include("../MODULOS/footer.php");
?>




