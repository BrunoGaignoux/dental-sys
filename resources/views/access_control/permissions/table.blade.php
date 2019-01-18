@foreach($roles as $rol)
    <table  class="table-responsive table-hover table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th colspan="5" style="text-align: center; background-color: #b8ccde;" >Permissões do Usuario {{ $rol->name }}</th>
        </tr>
        </thead>
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
        @foreach($rol->permissions as $permiso)
            <tr role="row" class="odd" id="filaP_{{ $permiso->id }}">
                <td>{{ $permiso->id }}</td>
                <td><span class="label label-default">{{ $permiso->name or "Nenhum" }}</span></td>
                <td><a style="display:block"></i>&nbsp;&nbsp;{{ $permiso->slug  }}</a></td>
                <td>{{ $permiso->description }}</td>
                <td>
                    {!! Form::open(['url' => ['/apagar_permission', $rol->id, $permiso->id], 'method' => 'post']) !!}
                        {{ csrf_field() }}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endforeach