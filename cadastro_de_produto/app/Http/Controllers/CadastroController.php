<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index() {
        return view('cadastro');
    }
    public function cadastro(Request $request) {
  
        $cadastro = new Cadastro;
            
        $cadastro->nome = $request->nome;
        $cadastro->desc = $request->desc;
        $cadastro->preco = $request->preco;
        $cadastro->qtd = $request->qtd;
        $cadastro->save(); 

        return redirect('/catagolo-de-produto');

    }
}