@extends('layouts.app')

@section('content')

    @component('layouts.components.breadcrumb')
        @slot('title')
            Pacientes
        @endslot
        @slot('page')
        @endslot
    @endcomponent

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="col-md-4">
            @component('layouts.components.search_filter_box')
                @slot('classe')
                    col
                @endslot
                @slot('color')
                    success
                @endslot
                @slot('color')
                    success
                @endslot
                @slot('searchRoute')
                    {{route('patients.create')}}
                @endslot
                @slot('searchName')
                    nome
                @endslot
                @slot('searchPlaceholder')
                    Nome do Paciente
                @endslot
                @slot('filterName')
                    status
                @endslot
                @slot('searchTitle')
                    Pesquisar por
                @endslot
                @slot('filterTitle')
                    Status
                @endslot
                @slot('searchField')
                @endslot
                @slot('defaultOption')
                    status
                @endslot
                @slot('selectOptions')
                @endslot
                @slot('filterField')
                @endslot
            @endcomponent
        </div>

        @component('layouts.components.table_box')
            @slot('classe')
                col-md-8
            @endslot
            @slot('color')
                success
            @endslot
            @slot('include')
                @include('patients.table')
            @endslot
            @slot('paginate')
                @include('adminlte-templates::common.paginate', ['records' => $patients])
            @endslot
        @endcomponent

    </div>
@endsection

