@extends('layouts.app')

@section('content')

    @component('layouts.components.breadcrumb')
        @slot('title')
            Estoque
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
                    {{route('stocks.create')}}
                @endslot
                @slot('searchName')
                    search
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
                @slot('filterField')
                @endslot
            @endcomponent
            <br>
            @component('layouts.components.add_new_button')
                @slot('classe')
                    col
                @endslot
                @slot('route')
                    {{route('stocks.create')}}
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
                @include('stocks.table')
            @endslot
            @slot('paginate')
                @include('adminlte-templates::common.paginate', ['records' => $stocks])
            @endslot
        @endcomponent

    </div>
@endsection

