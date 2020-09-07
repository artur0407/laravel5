<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    public function index()
    {
        return view("usuarios", [
            "texto" => "Lista de Usuarios",
            "check" => true,
            "usuarios" => ["user1", "user2", "user3", "user4"]
        ]);
    }
}
