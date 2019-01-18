<table  class="table-responsive table-hover table-striped" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Sigla</th>
        <th>Descrição</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $rol)
        <tr role="row" class="odd" id="filaR_{{  $rol->id }}">
            <td>{{ $rol->id }}</td>
            <td><span class="label label-default">{{ $rol->name or "Nenhum" }}</span></td>
            <td><a style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ $rol->slug  }}</a></td>
            <td>{{ $rol->description }}</td>
            <td>
                {!! Form::open(['url' => ['/apagar_rol', $rol->id], 'method' => 'post']) !!}
                    {{ csrf_field() }}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>