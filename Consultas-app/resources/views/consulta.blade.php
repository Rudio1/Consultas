@extends('layouts.basico')
@section('titulo', $titulo)

@section('conteudo')
<body>

    <h1 id="h1-titulo">Preenchimento de paciente</h1>
    @component('form.consulta', ['consulta' =>$consulta, 'cadastro' => $cadastro])
    @endcomponent
    
    
</body>
</html>
@endsection 