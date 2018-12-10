<table class="table table-responsive" id="patients-table">
    <thead>
        <tr>
        <th>Total de tratamentos
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>NP
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>CPF
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Status
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Paciente
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Nascimento
            <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th>Editar</th>
        <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)
        <tr>
            <td>{!! $patient->codigo_agenda_uranet !!}</td>
            <td>{!! $patient->numero_prontuario !!}</td>
            <td>{!! $patient->cpf !!}</td>
            <td>{!! $patient->nascimento !!}</td>
            <td>{!! $patient->nome_social !!}</td>
            <td>{!! $patient->status !!}</td>
            {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <td>
                        <a href="{!! route('patients.edit', [$patient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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