<?php

namespace App\Http\Controllers;
use App\Models\Consultas;
use App\Models\Cadastro;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consultaIndex (Request $request){
        $consulta = Consultas::all();
        return view('consulta', ['titulo'=> '(Consultas)', 'consulta' => $consulta]); 
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
        $cadastro = Cadastro::all();

        return view('cadastrar-paciente', ['titulo' => 'cadastro', 'cadastro' => $cadastro]);
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
}
