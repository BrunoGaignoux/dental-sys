@extends('layouts.app')

@section('content')
    @component('layouts.components.breadcrumb')
        @slot('title')
            Fornecedores
        @endslot
    @endcomponent
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="col-md-3">
            @component('layouts.components.table_box')
                @slot('classe')
                    col
                @endslot
                @slot('color')
                    success
                @endslot
                @slot('include')
                    @component('layouts.components.form')
                        @slot('route')
                            {{ url('criar_permiso') }}
                        @endslot
                        @slot('method')
                            get
                        @endslot
                        @slot('inputs')
                            @component('layouts.components.select_input')
                                @slot('col')
                                        col-md-12
                                    @endslot
                                @slot('labelName')
                                        tipo
                                    @endslot
                                @slot('name')
                                    @endslot
                                @slot('selectId')
                                        rol_sel
                                    @endslot
                                @slot('selectName')
                                        tipo
                                    @endslot
                                @slot('options')
                                        <option value="nome_fantasia">Nome fantasia</option>
                                        <option value="cidade">Cidade</option>
                                @endslot
                            @endcomponent
                            @component('layouts.components.text_input')
                                @slot('col')
                                    col-md-12
                                @endslot
                                @slot('labelName')
                                    permission_name
                                @endslot
                                @slot('placeholder')
                                    Digite sua pesquisa...
                                @endslot
                            @endcomponent
                        @endslot
                        @slot('buttonStyle')
                            success
                        @endslot
                        @slot('submitButton')
                            Pesquisar
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            <br>
            @component('layouts.components.button')
                @slot('classe')
                    col
                @endslot
                @slot('color')
                    success
                @endslot
                @slot('route')
                    {{route('providers.create')}}
                @endslot
                @slot('title')
                    Novo fornecedor
                @endslot
            @endcomponent
        </div>
        @component('layouts.components.table_box')
            @slot('classe')
                col-md-9
            @endslot
            @slot('color')
                success
            @endslot
            @slot('include')
                @include('providers.table')
            @endslot
            @slot('paginate')
                @include('adminlte-templates::common.paginate', ['records' => $providers])
            @endslot
        @endcomponent
    </div>
@endsection

