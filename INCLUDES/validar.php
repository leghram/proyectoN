<?php
include("../CONFIG/BaseDatos.php");

$objBD = new BaseDatos();

$usuarioNick = $_REQUEST["nick"];
$usuarioPass = $_REQUEST["pass"];


$consulta = "SELECT * FROM USUARIOS WHERE NICK = '" . $usuarioNick. "' AND PASSWORD = '" .$usuarioPass. "'";

$resultados = mysqli_query($objBD->coneccion, $consulta);

$fila = mysqli_fetch_row($resultados);

if($fila){
    header("Location: ../PAGINAS/clientes.php");
}else{
    header("Location: ../");
}





?>