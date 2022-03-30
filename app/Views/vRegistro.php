<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="container">
    <h1>Encuesta a clientes</h1>
    <form method="POST" action="../Home/insertarForm">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" 
        placeholder="email@example.com"><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <label for="nombre">nombre</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellido">apellido</label>
        <input type="text" id="apellido" name="apellido"><br>
        <label for="edad">edad</label>
        <input type="text" id="edad" name="edad"><br>
        <label for="marca">marca favorita de proudctos</label>
        <input type="text" id="marca" name="marca"><br>
        <label for="costo">cuanto gastarias en produtos?</label>
        <input type="text" id="costo" name="costo"><br>
        <label for="membresia">tienes membresia</label>
        <input type="text" id="membresia" name="membresia"><br>




        <button type="submit"> Registrar </button>
    </form>
</div><br>
<footer>
<div class="text-center text-dark p-3" style="background-color: #97A3AB ">
 Osvaldo
</div>

</footer>
</body>
</html>
<?php


?>