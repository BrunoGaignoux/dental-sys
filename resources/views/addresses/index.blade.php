@extends('layouts.app')

@section('content')

    @component('layouts.components.breadcrumb')
        @slot('title')
            Endereços
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
                    {{route('addresses.create')}}
                @endslot
                @slot('searchName')
                    endereco
                @endslot
                @slot('searchPlaceholder')
                    Endereço
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
            <br>
            @component('layouts.components.add_new_button')
                @slot('classe')
                    col
                @endslot
                @slot('route')
                    {{route('addresses.create')}}
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
                @include('addresses.table')
            @endslot
            @slot('paginate')
                @include('adminlte-templates::common.paginate', ['records' => $addresses])
            @endslot
        @endcomponent

    </div>
@endsection

