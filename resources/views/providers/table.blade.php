<table class="table table-responsive" id="providers-table">
    <thead>
        <tr>
        <th>Nome Fantasia
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Cidade/Estado
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Telefone
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Editar</th>
        <th>Exclir</th>
        </tr>
    </thead>
    <tbody>
    @foreach($providers as $provider)
        <tr>
            <td>{!! $provider->nome_fantasia !!}</td>
            <td>{!! $provider->codigo_endereco !!}</td>
            <td>{!! $provider->telefone1 !!}</td>
            {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <td>
                    <a href="{!! route('providers.edit', [$provider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </td>
            </div>
            {!! Form::close() !!}
        </tr>
    @endforeach
    </tbody>
</table>