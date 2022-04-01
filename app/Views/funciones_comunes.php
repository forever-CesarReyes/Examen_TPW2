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

   function combo_usuarios($id_usuario=0)
     {
   	$conexion =new mysqli("localhost","root","","usuarios");

       $sql="SELECT * FROM usuarios";

        $resultado=$conexion->query($sql);

       $combo= '';

      if ($resultado)
      {
   	  while ($fila=$resultado->fetch_assoc())
   	  {
   		if($fila['id_usuario']==$id_usuario)
         {
           $combo.='<option selected value="'.$fila['id_usuario'].'">'.$fila['nombre'].'</option>';
         }
         else
         {
            $combo.='<option value="'.$fila['id_usuario'].'">'.$fila['nombre'].'</option>';
         }
   	  }
       }
       return $combo;
      }
 ?>
