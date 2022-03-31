<?php
function combo_categorias($id_categoria=0)
  {
	$conexion =new mysqli("localhost","root","","gastos");

    $sql="SELECT * FROM categorias";

     $resultado=$conexion->query($sql);

    $combo= '';

   if ($resultado)
   {
	  while ($fila=$resultado->fetch_assoc())
	  {
		if($fila['id_categoria']==$id_categoria)
      {
        $combo.='<option selected value="'.$fila['id_categoria'].'">'.$fila['categoria'].'</option>';
      }
      else
      {
         $combo.='<option value="'.$fila['id_categoria'].'">'.$fila['categoria'].'</option>';
      }
	  }
    }
    return $combo;
   } 
 ?>