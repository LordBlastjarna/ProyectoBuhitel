<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="styleCon.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <h2 class="alinearTexto">Gestión de Ocupaciones</h2>
    <br><br>

    <!-- Barra de búsqueda-->
    <section class="Contenedor">

        <!-- Campos de Búsqueda-->
        <div class="contenedor">
            <input type="text" placeholder="Huésped" class="campoBusqueda" id="campoHuesped">
            <input type="text" placeholder="Habitación" class="campoBusqueda" id="campoHabitacion">
            <button class="Azul botonBusqueda" id="BtnBuscar">Buscar</button>
        </div>
        <!-- Campos de Búsqueda-->
        <br><br>
        <!-- Botones Colores-->
        <div class="contenedor">
            <button class="Verde Filtro" id="BtnIzq"></button>
            <button class="Rojo Filtro" id="BtnMid"></button>
            <button class="Morado Filtro" id="BtnDer"></button>
            <button class="Gris Filtro" id="BtnG"></button>
        </div>  
        <!-- Botones Colores-->

       
    </section>
    <!-- Barra de búsqueda-->
    <br><br>
    <section id="ContenedorM">
        
    </section>
    
    <br><br>
</body>
<script src= "JSConsultarRes.js"></script>
</html>