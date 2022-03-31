<?php

namespace App\Controllers;
use App\Models\mUsuarios;
use App\Models\mGastos;

class Home extends BaseController
{
    public function index()
    {
        return view('vIngreso');
    }
    public function login(){
        return view('vLogin');
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
    /******************************************MGastos***************************
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
        $datoId['idRegistrado'] = $mGastos->db->insertID();

        return view("vSuccessgasto", $datoId);
    }
    public function mostrarRegistrosg()
    {
      $mGastos=new mGastos();
      $all=$mGastos->findAll();
      $gastos= array('gastos' =>$all);
      return view("vRegistrosgastos",$gastos);
    }
    /*registros gastos*/
    public function gastosusuario(){
      $mGastos = new mGastos();
      $id_usuario = $_POST['id_usuario'];
      $user= $mGastos->where('id_usuario',$id_usuario)->first();
      return view("vIngresado_gastos",$user);
    }
    public function buscarRegistro_gasto()
    {
      $mGastos = new mGastos();
      $id_gastos = $_POST['id_gastos'];
      $user = $mGastos->find($id_gastos);
      return view("vRegistroEncontrado_gasto",$correo);
    }
    public function actualizarRegistro_gasto()
    {
      $mGastos = new mGastos();
      $id_gastos = $_POST['id_gastos'];
      $gastoActualizado =[
        "moonto" => $_POST['monto'],
        "fecha" => $_POST['fecha'],
        "descripcion" => $_POST['descripcion'],
        "id_categoria" => $_POST['id_categoria'],
        "id_usuario" => $_POST['id_usuario']
      ];
      $mGastos->update($id_gastos, $gastoActualizado);
      return $this->mostrarRegistrosg();
    }
    public function eliminarRegistro_gasto($id)
    {
      $mGasto = new mGasto();
      $id_gastos = $id;
      $mGastos->delete($id_gastos);

      return $this->mostrarRegistros();
    }


}
