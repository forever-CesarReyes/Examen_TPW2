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
    public function registro(){
        return view('vRegistro');
    }
    public function registro_gasto(){
        return view('vRegistro_gasto');
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
