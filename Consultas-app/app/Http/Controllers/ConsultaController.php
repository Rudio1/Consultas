<?php

namespace App\Http\Controllers;
use App\Models\Consultas;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consulta(Request $request){
        $teste = Consultas::all();
        // dd($teste);
        return view('consulta', ['titulo'=> '(Consultas)', 'consultas_teste' => $teste]); 
    }

    public function salvarConsulta(Request $request){

        $dados = $request->except(('_token'));

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
        return redirect()->route('index');

    }
}
