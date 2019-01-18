<table class="table table-responsive" id="schedules-table">
    <thead>
        <tr>
            <th>Data - Hora
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Nome
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Telefone 1
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Telefone 2
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Celular
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
    @foreach($schedules as $schedule)
        <tr>
            <td>{!! $schedule->nome_paciente !!}</td>
            <td>{!! $schedule->telefone1 !!}</td>
            <td>{!! $schedule->telefone2 !!}</td>
            <td>{!! $schedule->celular !!}</td>
            <td>{!! $schedule->start_time !!}</td>
            <td>{!! $schedule->observacao !!}</td>
            {!! Form::open(['route' => ['schedules.destroy', $schedule->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <td>
                    <a href="{!! route('schedules.edit', [$schedule->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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