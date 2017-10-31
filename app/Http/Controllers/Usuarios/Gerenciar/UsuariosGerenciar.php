<?php

namespace skymanager\Http\Controllers\Usuarios\Gerenciar;

use Illuminate\Http\Request;
use skymanager\Http\Controllers\Controller;
use DB;

class UsuariosGerenciar extends Controller
{
    public function listar()
    {
        $users = DB::table('users')->get();
        return view('Usuarios.Gerenciar.UsuariosGerenciar',compact('users'));
    }
    
    public function editar($id)
    {
        $users = DB::table('users')->find($id);
        //dd($users);
        return view('Usuarios.Gerenciar.UsuariosEditar',compact('users'));
    }
}
