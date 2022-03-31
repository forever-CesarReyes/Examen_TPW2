<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registros de gastos</title>
</head>
<body>
	<div class="container">
    <h1>Resgistros Actuales de gastos</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Monto</th>
          <th>Fecha</th>
          <th>Descripcion</th>
          <th>categoria</th>
					<th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($gastos as $gasto) {?>
        <tr>
          <td><?php echo $gasto['id_gastos'];?></td>
          <td><?php echo $gasto['monto'];?></td>
          <td><?php echo $gasto['fecha'];?></td>
          <td><?php echo $gasto['descripcion'];?></td>
          <td><?php echo $gasto['id_categoria'];?></td>
					<td><a type="button" href="<?php echo base_url();?>/Examen_TPW2/public/Home/eliminarRegistrog/<?php echo $gasto['id_gastos'];?>">Eliminar</a></td>
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
    <a class="text-dark" href="<?php echo base_url();?>/Examen_TPW2/public/Home/bienvenida">Home</a>
  </div>
</footer>
</html>
