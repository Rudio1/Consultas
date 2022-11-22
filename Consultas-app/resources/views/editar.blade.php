@extends('layouts.basico')
@section('titulo', $titulo)


@section('conteudo')
 <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('editar.index') }}">
                    <input type="hidden" name="id" value="{{ $editar->nome_cadastro ?? '' }}">
                    @csrf
                    <input type="text" name="nome" value="{{ $editar->nome_cadastro ?? old('nome_cadastro') }}" placeholder="nome_cadastro" class="borda-preta">
                    {{ $errors->has('nome_cadastro') ? $errors->first('nome_cadastro') : '' }}

                    <input type="text" name="site" value="{{ $editar->data_cadastro ?? old('data_cadastro') }}" placeholder="data_cadastro" class="borda-preta">
                    {{ $errors->has('data_cadastro') ? $errors->first('data_cadastro') : '' }}

                    <input type="text" name="uf" value="{{ $editar->valor_consulta ?? old('valor_consulta') }}" placeholder="valor_consulta" class="borda-preta">
                    {{ $errors->has('valor_consulta') ? $errors->first('valor_consulta') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
@endsection