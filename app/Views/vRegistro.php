<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
    <title>Registro</title>
</head>
<body>
    <div class="container">
    <h1>Encuesta a clientes</h1>
    <form method="POST" action="../Home/insertarForm">

        <label for="nombre">nombre</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellido">apellido</label>
        <input type="text" id="apellido" name="apellido"><br>
        <label for="edad">edad</label>
        <input type="text" id="edad" name="edad"><br>
        <label for="correo">Email</label>
        <input type="email" id="correo" name="correo"
        placeholder="email@example.com"><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

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
