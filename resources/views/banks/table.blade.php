<table class="table table-responsive" id="banks-table">
    <thead>
        <tr>
        <th>Banco
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Descricao
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Agencia
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Conta
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Status
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Editar</th>
        <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    @foreach($banks as $bank)
        <tr>
            <td>{!! $bank->banco !!}</td>
            <td>{!! $bank->descricao !!}</td>
            <td>{!! $bank->agencia !!}</td>
            <td>{!! $bank->conta !!}</td>
            <td>{!! $bank->status !!}</td>
            {!! Form::open(['route' => ['banks.destroy', $bank->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <td>
                    <a href="{!! route('banks.edit', [$bank->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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