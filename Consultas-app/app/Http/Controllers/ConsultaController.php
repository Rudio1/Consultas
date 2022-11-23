<?php

namespace App\Http\Controllers;
use App\Models\Consultas;
use App\Models\Cadastro;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ConsultaController extends Controller
{
    public function consultaIndex (){
        $consulta = Consultas::all();
        $cadastro = Cadastro::all();
        return view('consulta', ['titulo' => 'Consulta', 'consulta' => $consulta, 'cadastro' => $cadastro]);
    }

    public function enviarConsulta(Request $request){

        $regras = [
            'nome_paciente' => 'required',
            'data_consulta' => 'required',
            'descricao_consulta' => 'required'
        ];
        
        $feedback = [
            'required' => ' O campo deve ser preenchido'
        ];

        $request->validate($regras, $feedback);  
        Consultas::create($request->all());
        return redirect()->route('site.index');
    }

    public function cadastroIndex(){
        $consulta = Consultas::all();
        $cadastro = Cadastro::all();
        return view('cadastrar-paciente', ['titulo' => 'cadastro', 'cadastro' => $cadastro, 'consulta' => $consulta]);
    }

    public function enviarCadastro(Request $request) {

        $regras = [
            'nome_cadastro' => 'required',
            'data_cadastro' => 'required',
            'valor_consulta' => 'required'
        ];

        $feedback = [
            'required' => "Preencha o campo"
        ];

        $request->validate($regras, $feedback);
        Cadastro::create($request->all());
        return redirect()->route('site.index');
    }

    public function editarUsers($id, $msg = ''){
        $editar = Cadastro::find($id);

        return view('editar', ['titulo' => 'testando' , 'editar' => $editar, 'msg' => $msg]);
    }



    public function editarIndex(Request $request){

        $msg = '';

        if($request->input('_token') != '' && $request->input('id') != '') {
            $cadastro = Cadastro::find($request->input('id'));
            $update = $cadastro->update($request->all());
        if($update) {
            $msg = 'Atualização realizado com sucesso';
        } else {
            $msg = 'Erro ao tentar atualizar o registro';
        }
    }

        return redirect()->route('editar.putindex', ['id' => $request->input('id'), 'msg' => $msg]);
    }


    public function listarPaciente(Request $request){
        $paciente = Cadastro::where('nome_cadastro', 'like', '%'.$request->input('nome_cadastro').'%')
        ->where('data_cadastro', 'like', '%'.$request->input('data_cadastro').'%')
        ->where('valor_consulta', 'like', '%'.$request->input('valor_consulta').'%')
        ->get();

        return view('paciente',  ['paciente' => $paciente]);
    }
}
