<table class="table table-responsive" id="officials-table">
    <thead>
        <tr>
        <th>Nome
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Telefone
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Função principal
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Ativo
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Editar</th>
        <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    @foreach($officials as $official)
        <tr>
            <td>{!! $official->nome !!}</td>
            <td>{!! $official->codigo_tipo_usuario !!}</td>
            <td>{!! $official->telefone_1 !!}</td>
            <td>{!! $official->ativo !!}</td>
            {!! Form::open(['route' => ['officials.destroy', $official->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <td>
                    <a href="{!! route('officials.edit', [$official->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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