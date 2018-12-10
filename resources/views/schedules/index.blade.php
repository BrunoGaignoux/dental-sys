@extends('layouts.app')

@section('content')
    @component('layouts.components.breadcrumb')
        @slot('title')
            Agenda de avaliação
        @endslot
    @endcomponent

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="col-md-3">
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
                    {{route('schedules.create')}}
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
                        <label for="telefone1" style="width: 100%">
                            <input type="text" class="form-control" name="telefone1" placeholder="Telefone 1">
                        </label>
                        <label for="telefone2" style="width: 100%">
                            <input type="text" class="form-control" name="telefone1" placeholder="Telefone 2">
                        </label>
                        <label for="celular" style="width: 100%">
                            <input type="text" class="form-control" name="celular" placeholder="Telefone 3">
                        </label>

                        <label for="start-time" style="width: 100%">
                            <input type="date" class="form-control" name="start-time" placeholder="Data início">
                        </label>
                        <label for="end-time" style="width: 100%">
                            <input type="date" class="form-control" name="end-time" placeholder="Data fim">
                        </label>
                @endslot
                @slot('defaultOption')
                    status
                @endslot
                @slot('selectOptions')
                @endslot
                @slot('filterField')
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
                    {{route('patients.create')}}
                @endslot
                @slot('title')
                    Agendamento presencial
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
                <evaluation-schedule></evaluation-schedule>
                @include('schedules.table')
            @endslot
            @slot('paginate')
                @include('adminlte-templates::common.paginate', ['records' => $schedules])
            @endslot
        @endcomponent

    </div>
@endsection

