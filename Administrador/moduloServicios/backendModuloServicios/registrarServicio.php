<?php
    include "bd.php";
    if(isset($_POST['nombre']) &&  isset($_POST['tipo']) && isset($_POST['precio']) 
    && isset($_POST['descripcion'])){

        $nombre = $_POST['nombre'];
        $categoria = $_POST['tipo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        
        $hotel = 1;
	    $bd = new database();
        $bd -> crearCategoria($categoria);
        $categoriaID = $bd -> obtenerCategoriaID($categoria);
        $res = $bd-> registrarServicio($hotel,$nombre,$categoriaID,$precio,$descripcion);
        echo $categoriaID;
    }

?>