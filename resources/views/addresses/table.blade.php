<table class="table table-responsive table-striped" id="addresses-table">
    <thead>
        <tr>
            <th>Logradouro
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Complemento
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>N
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Cep
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Bairro
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Cidade
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Estado
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Pais
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    @foreach($addresses as $address)
        <tr>
            <td>{!! $address->logradouro !!}</td>
            <td>{!! $address->complemento !!}</td>
            <td>{!! $address->numero !!}</td>
            <td>{!! $address->cep !!}</td>
            <td>{!! $address->bairro !!}</td>
            <td>{!! $address->cidade !!}</td>
            <td>{!! $address->estado !!}</td>
            <td>{!! $address->pais !!}</td>
            {!! Form::open(['route' => ['addresses.destroy', $address->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <td>
                    <a href="{!! route('addresses.edit', [$address->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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