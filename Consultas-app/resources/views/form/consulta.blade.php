<form action={{ route('consulta.index') }} method="post">
    @csrf
        <h3>Nome do paciente</h3>
    <select name="nome_cadastro">
        <option value="">Paciente</option>
        @foreach($consulta as $key => $consulta)
            <option value="{{$consulta->id}}">{{$consulta->nome_cadastro}}</option>
        @endforeach
    </select>
        <input type="text" name="nome_paciente">
        <p id="paragro-form">Data Da consulta</p>
        <input type="date" name="data_consulta">
        <br>
        {{ $errors->has('data_consulta') ? $errors->first('data_consulta') : '' }}

        <p id="paragro-form">Informe um pouco de como foi a sua consulta</p>
        <br>
        <textarea name="descricao_consulta" placeholder="Descricao da consulta" id="" cols="30" rows="10" itemid="placeholder-textarea"></textarea>
         {{ $errors->has('descricao_consulta') ? $errors->first('descricao_consulta') : '' }}
        <br>
        <button type="submit" id="button-consultas">Enviar</button>
    </form>