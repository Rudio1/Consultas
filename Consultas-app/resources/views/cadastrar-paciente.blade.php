@extends('layouts.basico')
@section('titulo', $titulo)

@section('conteudo')
        <h1>Cadastrar Novo paciente</h1>
        <div>
            <form action="{{route('cadastro.index')}}" method="post">
            @csrf
            <input style="width: 12%;" type="text" name="nome_cadastro" placeholder="Informe o nome do paciente">
            {{ $errors->has('nome_cadastro') ? $errors->first('nome_cadastro') : '' }}
            <br>
            Data de cadastro
            <br>
            <input type="date" name="data_cadastro">
            {{ $errors->has('data_cadastro') ? $errors->first('data_cadastro') : '' }}
            <br>
            Valor da consulta
            <br>
            <input type="number" step="any" name="valor_consulta">
            {{ $errors->has('valor_consulta') ? $errors->first('valor_consulta') : '' }}
            <button type="submit" id="button-consultas">Cadastrar</button>
            </form>
        </div>
</body>
</html>
@endsection