<table class="table table-hover table-striped" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Código</th>
            <th>Funções</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr role="row">
            <td>{{ $usuario->id }}</td>
            <td><span class="label label-default">
            @foreach($usuario->getRoles() as $roles)
                {{  $roles.","  }}
            @endforeach
                -</span>
            </td>
            <td>
                <i class="fa fa-user"></i>&nbsp;&nbsp;{{ $usuario->name  }}
            </td>
            <td>{{ $usuario->email }}</td>
            <td>
                {!! Form::open(['url' => ['user/erase/', $usuario->id], 'method' => 'post']) !!}
                    {{ csrf_field() }}
                    <div class='btn-group'>
                        <a href="{!! url('edit/user/'.$usuario->id) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach



    </tbody>
</table>