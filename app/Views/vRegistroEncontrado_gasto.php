<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
  include_once ('funciones_comunes.php');
  $opciones_combo_categorias=combo_categorias($id_categoria); ?>
 <div class="container">
     <h1>Registro encontrado</h1>
     <form method="POST" action=" /xam/Examen_TPW2/public/Home/actualizarRegistro_gasto">
     <input type="hidden" id="id_gastos" name="id_gastos" value="<?php echo $id_gastos; ?>">
     <label for="monto">Monto</label>
     <input type="monto" name="monto" value="<?php echo $monto; ?>">
     <label for="fecha"> Fecha </label>
     <input type="date" name="fecha" value="<?php echo $fecha; ?>">
     <label for="descripcion"> Descripcion </label>
     <input type="text" name="descripcion" value="<?php echo $descripcion; ?>">
     <label for="id_categoria">Categoria</label>
     <select type="text"name ="id_categoria"id="id_categoria"required value="<?php echo $id_categoria?>" >
      <?php  echo $opciones_combo_categorias; ?>
     </select>

     <button type="submit">Actualizar</button>
</div>
</body>
</html>
