<?php

namespace App\Controllers;
use App\Models\mUsuarios;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bienvenida()
    {
        return view('vBienvenida');
    }
    /******************************************MUsuarios***************************
    *******************************************************************************
    *******************************************************************************/
    public function registro(){
        return view('vRegistro');
    }
    public function insertarForm(){
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "nombre"=>$_POST['nombre'],
            "apellido"=>$_POST['apellido'],
            "edad"=>$_POST['edad'],
            "correo"=>$_POST['correo'],
            "password"=>$_POST['password']

        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->db->insertID();

        return view("vSuccess", $datoId);
    }
    public function ingreso(){
      return view ('vIngreso');
    }
    public function mostrarRegistros()
    {
      $mUsuarios=new mUsuarios();
      $all=$mUsuarios->findAll();
      $usuarios= array('usuarios' =>$all);
      return view("vRegistros",$usuarios);
    }
    public function ingresarForm()
    {
      $mUsuarios = new mUsuarios();
      $correo = $_POST['correo'];
      $contraseña = $_POST['password'];
      $user= $mUsuarios->where('correo',$correo)->where('password',$contraseña)->first();
      return view("vIngresado",$user);
    }
    public function buscarRegistro()
    {
      $mUsuarios = new mUsuarios();
      $id_usuario = $_POST['id_usuario'];
      $correo = $mUsuarios->find($id_usuario);
      return view("vRegistroEncontrado",$correo);
    }
    public function actualizarRegistro()
    {
      $mUsuarios = new mUsuarios();
      $id_usuario = $_POST['id_usuario'];
      $usuarioActualizado =[
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "edad" => $_POST['apellido'],
        "correo" => $_POST['correo'],
        "password" => $_POST['password']
      ];
      $mUsuarios->update($id_usuario, $usuarioActualizado);
      return $this->mostrarRegistros();
    }
    public function eliminarRegistro($id)
    {
      $mUsuarios = new mUsuarios();
      $id_usuario = $id;
      $mUsuarios->delete($id_usuario);

      return $this->mostrarRegistros();
    }
    /******************************************MGastoss***************************
    *******************************************************************************
    *******************************************************************************/
    public function registro_gasto(){
        return view('vRegistro_gasto');
    }
    public function insertarForm_gasto(){
        $mGastos = new mGastos();
        $gastoNuevo = [
            "monto"=>$_POST['monto'],
            "fecha"=>$_POST['fecha'],
            "descripcion"=>$_POST['descripcion'],
            "id_categoria"=>$_POST['id_categoria'],

        ];
        $mGastos->insert($gastoNuevo);
        $datoId['idRegistrado'] = $mGasto->db->insertID();

        return view("vSuccess", $datoId);
    }

}
