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
    public function insertarForm(){
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "usuario"=>$_POST['email'],
            "password"=>$_POST['password'],
            "nombre"=>$_POST['nombre'],
            "apellido"=>$_POST['apellido'],
            "edad"=>$_POST['edad'],
            "marca"=>$_POST['marca'],
            "costo"=>$_POST['costo'],
            "membresia"=>$_POST['membresia']

            
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->db->insertID();

        return view("vSuccess", $datoId);

    }
}

