<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = Cadastro::get();
        return view('catagolo', compact('users'));
    }

    public function destroy($id) {
       Cadastro::findOrFail($id)->delete();
       return redirect('catagolo-de-produto')->with('msg', 'Evento excluído!');
    }
    public function edit($id) {
       $cadastro = Cadastro::findOrFail($id);
       return view('edit', ['cadastro' => $cadastro]);
    }
    public function update(Request $request) {
      Cadastro::findOrFail($request->id)->update($request->all());
      return redirect('catagolo-de-produto')->with('msg', 'Editado com sucesso!');
    
    }
}
