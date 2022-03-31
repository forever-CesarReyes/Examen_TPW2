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
    <form method="POST" action="../Home/insertarForm_gasto">

        <label for="monto">monto</label>
        <input type="text" id="monto" name="monto"><br>
        <label for="fecha">fecha</label>
        <input type="date" id="fecha" name="fecha"><br>
        <label for="descripcion">descripcion</label>
        <input type="text" id="descripcion" name="descripcion"><br>
        <label for="categoria">Categoria</label>
        <input type="id_categoria" id="id_categoria" name="id_categoria"><br>


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
