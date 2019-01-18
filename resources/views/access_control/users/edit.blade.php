@extends ('layouts.app')
@section('content')
    @component('layouts.components.breadcrumb')
        @slot('title')
            <a class="link" href="{{route('access.users.index')}}">Controle de acesso</a>
        @endslot
        @slot('page')
            <li class="breadcrumb-item active" aria-current="page">Editar usuario {{ $usuario->name }}</li>
        @endslot
    @endcomponent
    <div class="content">
        @include('flash::message')
        <div class="row">
            @component('layouts.components.table_box')
                @slot('classe')
                    col-md-12
                @endslot
                @slot('color')
                    success
                @endslot
                @slot('include')
                    <div class="box-header with-border my-box-header">
                        <h3 class="box-title"><strong>Atribuir Papel</strong></h3>
                        <div style="background-color:white;" >
                            Tipos atribuidos:
                            @foreach($usuario->getRoles() as $rl)
                                <span class="label label-warning" style="margin-left:10px;">{{ $rl }} </span>
                            @endforeach
                        </div>
                    </div><!-- /.box-header -->
                    <div class="col-md-12">
                        @component('layouts.components.form')
                            @slot('route')
                                {{ route('access.role.aggregate') }}
                            @endslot
                            @slot('method')
                                post
                            @endslot
                            @slot('hiddenName')
                                id_usuario
                            @endslot
                            @slot('hiddenId')
                                {{ $usuario->id }}
                            @endslot
                            @slot('inputs')
                                @component('layouts.components.select_input')
                                    @slot('col')
                                        col-sm-6
                                    @endslot
                                    @slot('labelName')
                                        tipo
                                    @endslot
                                    @slot('name')
                                        Papel a Atribuir*
                                    @endslot
                                    @slot('selectId')
                                        rol1
                                    @endslot
                                    @slot('selectName')
                                        tipo
                                    @endslot
                                    @slot('options')
                                        @foreach($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                        @endforeach
                                    @endslot
                                @endcomponent
                            @endslot
                            @slot('divClass')
                                col
                            @endslot
                            @slot('buttonStyle')
                                success
                            @endslot
                            @slot('submitButton')
                                Agregar tipo
                            @endslot
                        @endcomponent
                    </div>
                    <hr>
                    <div class="col-md-12">
                        @component('layouts.components.form')
                            @slot('route')
                                {{ route('access.role.erase') }}
                            @endslot
                            @slot('method')
                                get
                            @endslot
                            @slot('hiddenName')
                                id_usuario
                            @endslot
                            @slot('hiddenId')
                                {{ $usuario->id }}
                            @endslot
                            @slot('inputs')
                                @component('layouts.components.select_input')
                                    @slot('col')
                                        col-sm-6
                                    @endslot
                                    @slot('labelName')
                                        tipo
                                    @endslot
                                    @slot('name')
                                        Papel a Remover*
                                    @endslot
                                    @slot('selectId')
                                        rol2
                                    @endslot
                                    @slot('selectName')
                                        tipo
                                    @endslot
                                    @slot('options')
                                        @foreach($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                        @endforeach
                                    @endslot
                                @endcomponent
                            @endslot
                            @slot('divClass')
                                col
                            @endslot
                            @slot('buttonStyle')
                                success
                            @endslot
                            @slot('submitButton')
                                Remover tipo
                            @endslot
                        @endcomponent
                    </div>
                @endslot
            @endcomponent
            @component('layouts.components.table_box')
                @slot('classe')
                    col-md-12
                @endslot
                @slot('color')
                    success
                @endslot
                @slot('include')
                    <div class="box-header with-border my-box-header">
                        <h3 class="box-title"><strong>Editar Informação do Usuario</strong></h3>
                    </div><!-- /.box-header -->
                    @component('layouts.components.form')
                        @slot('route')
                            {{ url('access.users.edit') }}
                        @endslot
                        @slot('method')
                            post
                        @endslot
                        @slot('hiddenName')
                            id_usuario
                        @endslot
                        @slot('hiddenId')
                            {{ $usuario->id }}
                        @endslot
                        @slot('inputs')
                            @component('layouts.components.text_input')
                                @slot('col')
                                    col-md-4
                                @endslot
                                @slot('labelName')
                                    nome
                                @endslot
                                @slot('placeholder')
                                    Nome
                                @endslot
                                @slot('value')
                                    {{ $usuario->name }}
                                @endslot
                            @endcomponent
                            @component('layouts.components.text_input')
                                @slot('col')
                                    col-md-4
                                @endslot
                                @slot('labelName')
                                    apelido
                                @endslot
                                @slot('placeholder')
                                    Sobrenome
                                @endslot
                                @slot('value')
                                    {{ $usuario->apelido }}
                                @endslot
                            @endcomponent
                            @component('layouts.components.text_input')
                                @slot('col')
                                    col-md-4
                                @endslot
                                @slot('labelName')
                                    telefone
                                @endslot
                                @slot('placeholder')
                                    Telefone
                                @endslot
                                @slot('value')
                                    {{ $usuario->telefone }}
                                @endslot
                            @endcomponent
                        @endslot
                        @slot('divClass')
                            col-md-12
                        @endslot
                        @slot('buttonStyle')
                            success
                        @endslot
                        @slot('submitButton')
                            Atualizar Dados
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            @component('layouts.components.table_box')
                @slot('classe')
                    col-md-12
                @endslot
                @slot('color')
                    success
                @endslot
                @slot('include')
                    <div class="box-header with-border my-box-header">
                        <h3 class="box-title"><strong>Acesso ao sistema</strong></h3>
                    </div><!-- /.box-header -->
                    @component('layouts.components.form')
                        @slot('route')
                            {{ route('access.edit') }}
                        @endslot
                        @slot('method')
                            post
                        @endslot
                        @slot('hiddenName')
                            id_usuario
                        @endslot
                        @slot('hiddenId')
                            {{ $usuario->id }}
                        @endslot
                        @slot('inputs')
                            @component('layouts.components.email_input')
                                @slot('col')
                                    col-md-6
                                @endslot
                                @slot('labelName')
                                    email
                                @endslot
                                @slot('name')
                                    Email*
                                @endslot
                                @slot('value')
                                    {{ $usuario->email }}
                                @endslot
                            @endcomponent
                            @component('layouts.components.password_input')
                                @slot('col')
                                    col-md-6
                                @endslot
                                @slot('labelName')
                                    password
                                @endslot
                                @slot('name')
                                    Nova Senha*
                                @endslot
                            @endcomponent
                        @endslot
                        @slot('buttonStyle')
                            success
                        @endslot
                        @slot('submitButton')
                            Atualizar Acesso
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
@endsection