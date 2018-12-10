<table class="table table-responsive" id="stocks-table">
    <thead>
        <tr>
            <th>Codigo Clinica</th>
        <th>Codigo Produtos</th>
        <th>Codigo Pedido</th>
        <th>Codigo Plano Contas</th>
        <th>Codigo Usuario</th>
        <th>Codigo Nivel</th>
        <th>Status</th>
        <th>Quantidade</th>
        <th>Motivo</th>
        <th>Tipo Acao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stocks as $stock)
        <tr>
            <td>{!! $stock->codigo_clinica !!}</td>
            <td>{!! $stock->codigo_produtos !!}</td>
            <td>{!! $stock->codigo_pedido !!}</td>
            <td>{!! $stock->codigo_plano_contas !!}</td>
            <td>{!! $stock->codigo_usuario !!}</td>
            <td>{!! $stock->codigo_nivel !!}</td>
            <td>{!! $stock->status !!}</td>
            <td>{!! $stock->quantidade !!}</td>
            <td>{!! $stock->motivo !!}</td>
            <td>{!! $stock->tipo_acao !!}</td>
            <td>
                {!! Form::open(['route' => ['stocks.destroy', $stock->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('stocks.show', [$stock->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('stocks.edit', [$stock->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>