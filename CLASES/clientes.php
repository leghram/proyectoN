<?php
include("../CONFIG/BaseDatos.php");

$objetoBD = new BaseDatos();

$consulta = "SELECT * FROM USUARIOS";


$registros = mysqli_query($objetoBD->coneccion,$consulta);

$registro = mysqli_fetch_row($objetoBD->coneccion , $consulta);


echo $registro[1];



?>

