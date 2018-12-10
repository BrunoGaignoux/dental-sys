<table class="table table-responsive" id="clinics-table">
    <thead>
        <tr>
            <th>Codigo Unidade Uranet</th>
        <th>Codigo Endereco</th>
        <th>Login Unidade Uranet</th>
        <th>Cnpj</th>
        <th>Razaosocial</th>
        <th>Fantasia</th>
        <th>Proprietario</th>
        <th>Fundacao</th>
        <th>Tel1 Cod</th>
        <th>Tel1 Ddd</th>
        <th>Telefone1</th>
        <th>Tel2 Cod</th>
        <th>Tel2 Ddd</th>
        <th>Telefone2</th>
        <th>Fax Cod</th>
        <th>Fax Ddd</th>
        <th>Fax</th>
        <th>Email</th>
        <th>Web</th>
        <th>Token</th>
        <th>Senha Prefeitura</th>
        <th>Senha Certificado</th>
        <th>Inscricaomunicipal</th>
        <th>Idioma</th>
        <th>Logomarca</th>
        <th>Status</th>
        <th>Datastatus</th>
        <th>Dataimplantacao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clinics as $clinic)
        <tr>
            <td>{!! $clinic->codigo_unidade_uranet !!}</td>
            <td>{!! $clinic->codigo_endereco !!}</td>
            <td>{!! $clinic->login_unidade_uranet !!}</td>
            <td>{!! $clinic->cnpj !!}</td>
            <td>{!! $clinic->razaosocial !!}</td>
            <td>{!! $clinic->fantasia !!}</td>
            <td>{!! $clinic->proprietario !!}</td>
            <td>{!! $clinic->fundacao !!}</td>
            <td>{!! $clinic->tel1_cod !!}</td>
            <td>{!! $clinic->tel1_ddd !!}</td>
            <td>{!! $clinic->telefone1 !!}</td>
            <td>{!! $clinic->tel2_cod !!}</td>
            <td>{!! $clinic->tel2_ddd !!}</td>
            <td>{!! $clinic->telefone2 !!}</td>
            <td>{!! $clinic->fax_cod !!}</td>
            <td>{!! $clinic->fax_ddd !!}</td>
            <td>{!! $clinic->fax !!}</td>
            <td>{!! $clinic->email !!}</td>
            <td>{!! $clinic->web !!}</td>
            <td>{!! $clinic->token !!}</td>
            <td>{!! $clinic->senha_prefeitura !!}</td>
            <td>{!! $clinic->senha_certificado !!}</td>
            <td>{!! $clinic->inscricaomunicipal !!}</td>
            <td>{!! $clinic->idioma !!}</td>
            <td>{!! $clinic->logomarca !!}</td>
            <td>{!! $clinic->status !!}</td>
            <td>{!! $clinic->datastatus !!}</td>
            <td>{!! $clinic->dataimplantacao !!}</td>
            <td>
                {!! Form::open(['route' => ['clinics.destroy', $clinic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clinics.show', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clinics.edit', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>