<?php
include("../CLASES/general.php");
// include("../CLASES/cliente.php");
// include("../CLASES/producto.php");
// include("../CLASES/proveedor.php");
// include("../CLASES/usuario.php");


class Ado{

private $fuente;
private $nombreTabla;
private $objeto;

 function Ado($url){
    $this->fuente = $url;
    $this->DefinirNombreTabla($url);
    $this->CrearObjeto();
 }

 function DefinirNombreTabla($url){
    if(strpos($url,"usuarios")){
        $this->nombreTabla= "USUARIOS";
    }else if(strpos($url,"categorias")){
        $this->nombreTabla= "CATEGORIAS";
    }else if(strpos($url,"clientes")){
        $this->nombreTabla= "CLIENTES";
    }else if(strpos($url,"productos")){
        $this->nombreTabla= "PRODUCTOS";
    }else if(strpos($url,"proveedores")){
        $this->nombreTabla= "PROVEEDORES";
    }
 }

 function CrearObjeto(){
    $this->objeto= new General($this->nombreTabla);
 }


 function EliminarConAdo($id){
    $resultado = $this->objeto->EliminarRegistro($id);
    return $resultado;
 }










 function ObtenerNombreTabla(){
    return $this->nombreTabla;
 }


 function ObtenerObjeto(){
    return $this->objeto;
 }


//  function GenerarDataObjeto(){
//     if(strpos($this->fuente,"usuarios")){
//         include("../CLASES/usuario.php");
//         $this->objeto = new Usuario();
//         $this->nombreTabla= "USUARIOS";
//     }else if(strpos($this->fuente,"categorias")){
//         include("../CLASES/categoria.php");
//         $this->objeto = new Categoria();
//         $this->nombreTabla= "CATEGORIAS";
//     }else if(strpos($this->fuente,"clientes")){
//         include("../CLASES/cliente.php");
//         $this->objeto = new Cliente();
//         $this->nombreTabla= "CLIENTES";
//     }else if(strpos($this->fuente,"productos")){
//         include("../CLASES/producto.php");
//         $this->objeto = new Producto();
//         $this->nombreTabla= "PRODUCTOS";
//     }else if(strpos($this->fuente,"proveedores")){
//         include("../CLASES/proveedor.php");
//         $this->objeto = new Proveedor();
//         $this->nombreTabla= "PROVEEDORES";
//     }
//  }



}








?>