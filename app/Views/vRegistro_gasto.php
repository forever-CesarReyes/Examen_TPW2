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
    <?php
    include_once ('funciones_comunes.php');
    $opciones_combo_categorias=combo_categorias();?>
    <div class="container">
    <h1>Encuesta a clientes</h1>
    <form method="POST" action="../Home/insertarForm_gasto">

        <label for="monto">monto</label>
        <input type="text" id="monto" name="monto"><br>
        <label for="fecha">fecha</label>
        <input type="date" id="fecha" name="fecha"><br>
        <label for="descripcion">descripcion</label>
        <input type="text" id="descripcion" name="descripcion"><br>
        <select type="text"name ="id_categoria"id="id_categoria"required>" >
         <?php echo $opciones_combo_categorias; ?>
        </select>


        <button type="submit"> Registrar </button>
    </form>
</div><br>
<footer>
<div class="text-center text-dark p-3" style="background-color: #97A3AB ">
 Osvaldo y Cesar
</div>

</footer>
</body>
</html>
<?php


?>
