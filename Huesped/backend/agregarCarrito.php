<?php 
    include "bdHuesped.php";
    $bd = new database();
    //FECHAS
    date_default_timezone_set('America/Mexico_City');
    $zonahoraria = date_default_timezone_get();
    $Hoy = date('c');
    //INIT
    header('Content-Type: application/json;');
    $info = file_get_contents('php://input');
    //Hacer JSON
    $nuevoJson = json_decode($info, true);
    //DETERMINAR VARIABLES 
    $Pedido = $nuevoJson['PID'];
    $Producto = $nuevoJson['Producto'];
    $Cantidad = $nuevoJson['Cantidad'];
    //CONSULTAR BASE DE DATOS
    $status = false;
    $Precio = $bd->registrarCarrito($Pedido, $Producto, $Cantidad);
    $status = $bd->actualizarPrecio($Pedido, $Precio);
    
    
    $arreglo = array(
        'carstat' => $status
    );
    //CREAR JSON PARA POSTEAR
    $JSONNUMERO = json_encode($arreglo);
    print_r($JSONNUMERO);
?>