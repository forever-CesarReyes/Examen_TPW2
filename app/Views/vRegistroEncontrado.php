<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="container">
     <h1>Registro encontrado</h1>
     <form method="POST" action="<?php echo base_url(); ?>/xam/Examen_TPW2/public/Home/actualizarRegistro">
     <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
     <label for="nombre">Nombre</label>
     <input type="nombre" name="nombre" value="<?php echo $nombre; ?>">
     <label for="apellido"> Apelldio </label>
     <input type="text" name="apellido" value="<?php echo $apellido; ?>">
     <label for="apellido"> edad </label>
     <input type="text" name="edad" value="<?php echo $edad; ?>">
     <label for="correo">Correo</label>
     <input type="correo" name="correo" value="<?php echo $correo; ?>">
     <label for="password"> contraseña</label>
     <input type="text" name="password" value="<?php echo $password; ?>">

     <button type="submit">Actualizar</button>
</div>
</body>
</html>
