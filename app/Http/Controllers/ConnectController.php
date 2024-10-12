<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function getLogin(){//Creamos el controlador para llamar a la pantalla de login
        return view("connect.login");//Cragamos al vista de login
    }

    public function getRegister(){
        return view("connect.register");
    }

    public function getRecover(){
        return view("connect.recover");
    }
}
