<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registros</title>
</head>
<body>
	<div class="container">
    <h1>Resgistros Actuales</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Contraseña</th>
					<th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $usuario) {?>
        <tr>
          <td><?php echo $usuario['id_usuario'];?></td>
          <td><?php echo $usuario['nombre'];?></td>
          <td><?php echo $usuario['apellido'];?></td>
          <td><?php echo $usuario['correo'];?></td>
          <td><?php echo $usuario['password'];?></td>
					<td><a type="button" href="<?php echo base_url();?>/TP_web/public/Home/eliminarRegistro/<?php echo $usuario['id_usuario'];?>">Eliminar</a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</body>
<footer>
  <br>
  <div class="text-center textdark p-3"style="background-color: rgba(0,0,0,0.2);">
    <i class="bi bi-badge-cc"></i>2022:
    <a class="text-dark" href="<?php echo base_url();?>/TP_web/public/Home/bienvenida">Home</a>
  </div>
</footer>
</html>
