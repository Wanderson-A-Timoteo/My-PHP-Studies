<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Model\Usuario as UsuarioModel;

class Usuario extends Controller
{
    public function cadastrar() {
        //dd(Hash::make(123), md5('123'), sha1('123'));
        
        return view('usuario.cadastro');

    }

    public function salvar(Request $request) {
        $request->validate([
            "nome" => "requerid",
            "email" => "requerid|email",
            "senha" => "requerid|min:5"
        ]);
        
        //dd($request->all());
        UsuarioModel::cadastrar($request);
        
        return view('usuario.sucesso');
    }
}
