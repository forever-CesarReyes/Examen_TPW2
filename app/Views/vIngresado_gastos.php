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
                <th>Monto</th>
                <th>Fecha</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>acciones</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td><?php echo $id_gastos; ?></td>
            <td><?php echo $monto; ?></td>
            <td><?php echo $fecha; ?></td>
            <td><?php echo $descripcion; ?></td>
            <td><?php echo $id_usuario; ?></td>

    </tr>

</tbody>
</table>
<br>
<form method="POST" action="<?php echo base_url(); ?>/Examen_TPW2/public/Home/buscarRegistro_gasto" >
<input type="hidden" name="id_gastos" value="<?php echo $id_gastos; ?>">
<button type="submit"> Actualizar datos</button>
</form>

</body>
</html>
