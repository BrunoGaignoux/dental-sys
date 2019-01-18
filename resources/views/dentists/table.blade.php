<table class="table table-responsive" id="dentists-table">
    <thead>
        <tr>
            <th>Codigo Clinica</th>
        <th>Codigo Endereco</th>
        <th>Cpf</th>
        <th>Bloqueio</th>
        <th>Nascimento</th>
        <th>Telefone1</th>
        <th>Telefone2</th>
        <th>Celular</th>
        <th>Sexo</th>
        <th>Nomemae</th>
        <th>Rg</th>
        <th>Email Pessoal</th>
        <th>Email Corporativo</th>
        <th>Comissao</th>
        <th>Avaliador</th>
        <th>Graduacao</th>
        <th>Ano Graduacao</th>
        <th>Codigo Areaatuacao1</th>
        <th>Codigo Areaatuacao2</th>
        <th>Codigo Areaatuacao3</th>
        <th>Conselho Tipo</th>
        <th>Conselho Estado</th>
        <th>Conselho Numero</th>
        <th>Ativo</th>
        <th>Data Inicio</th>
        <th>Data Fim</th>
        <th>Foto</th>
        <th>Restricao</th>
        <th>Chave Ativacao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dentists as $dentist)
        <tr>
            <td>{!! $dentist->codigo_clinica !!}</td>
            <td>{!! $dentist->codigo_endereco !!}</td>
            <td>{!! $dentist->cpf !!}</td>
            <td>{!! $dentist->bloqueio !!}</td>
            <td>{!! $dentist->nascimento !!}</td>
            <td>{!! $dentist->telefone1 !!}</td>
            <td>{!! $dentist->telefone2 !!}</td>
            <td>{!! $dentist->celular !!}</td>
            <td>{!! $dentist->sexo !!}</td>
            <td>{!! $dentist->nomemae !!}</td>
            <td>{!! $dentist->rg !!}</td>
            <td>{!! $dentist->email_pessoal !!}</td>
            <td>{!! $dentist->email_corporativo !!}</td>
            <td>{!! $dentist->comissao !!}</td>
            <td>{!! $dentist->avaliador !!}</td>
            <td>{!! $dentist->graduacao !!}</td>
            <td>{!! $dentist->ano_graduacao !!}</td>
            <td>{!! $dentist->codigo_areaatuacao1 !!}</td>
            <td>{!! $dentist->codigo_areaatuacao2 !!}</td>
            <td>{!! $dentist->codigo_areaatuacao3 !!}</td>
            <td>{!! $dentist->conselho_tipo !!}</td>
            <td>{!! $dentist->conselho_estado !!}</td>
            <td>{!! $dentist->conselho_numero !!}</td>
            <td>{!! $dentist->ativo !!}</td>
            <td>{!! $dentist->data_inicio !!}</td>
            <td>{!! $dentist->data_fim !!}</td>
            <td>{!! $dentist->foto !!}</td>
            <td>{!! $dentist->restricao !!}</td>
            <td>{!! $dentist->chave_ativacao !!}</td>
            <td>
                {!! Form::open(['route' => ['dentists.destroy', $dentist->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dentists.show', [$dentist->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dentists.edit', [$dentist->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>