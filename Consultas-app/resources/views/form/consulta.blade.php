<form action={{ route('teste.consulta') }} method="post">
    @csrf
        <h3>Nome do paciente</h3>
        <input type="text" name="nome_paciente" id="input-nome-paciente" placeholder="Informe o nome do paciente">
         {{ $errors->has('nome_paciente') ? $errors->first('nome_paciente') : '' }}
        <br>

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