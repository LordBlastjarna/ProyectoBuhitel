<?php 
session_start();
if ($_SESSION['sesionPersonal']['Tipo']!='Recepcion') {
            header("Location: /Buhitel", TRUE, 301);
}
else {
    # code...
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleServicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Servicios</title>
</head>
<body>
    <h2 class="alinearTexto">Consulta de Servicios</h2>
    <br><br>
    <!-- Seccion buscar habitación -->
    <section class="contenedor">
        <input type="text" placeholder="Buscar habitación" id="cmpHabitacion">
        <button class="Azul TBlanco" id="btnBuscar" disabled> Buscar </button>
    </section>
    <!-- Seccion buscar habitación -->
    <br><br>
    
    <br><br>
    <h1 class="alinearTexto Azul TBlanco" id="tituloHab">Habitación 2409</h1>
    <br><br>
    <section id="ContenedorL">
        
    </section>
</body>
<script src= "JSMenuServicios.js"></script>

</html>