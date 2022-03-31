<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
</head>
<body>
    <h1>Registro actual ingresado </h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>edad</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>acciones</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td><?php echo $id_usuario; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $apellido; ?></td>
            <td><?php echo $edad; ?></td>
            <td><?php echo $correo; ?></td>
            <td><?php echo $password; ?></td>


    </tr>

</tbody>
</table>
<br>
<form method="POST" action="<?php echo base_url(); ?>/Examen_TPW2/public/Home/buscarRegistro" >
<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
<button type="submit"> Actualizar datos</button>
</form>
<form method="POST" action="<?php echo base_url(); ?>/xam/Examen_TPW2/public/Home/gastosusuario" >
<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
<button type="submit"> Gastos</button>
</form>



</body>
</html>
