        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($paciente as $pac)
                            <tr>
                                <td>{{ $pac->nome_cadastro }}</td>
                                <td>{{ $pac->data_cadastro }}</td>
                                <td>{{ $pac->valor_consulta }}</td>
                                <td>Excluir</td>
                                <td><a href="{{ route('editar.putindex', $pac->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
