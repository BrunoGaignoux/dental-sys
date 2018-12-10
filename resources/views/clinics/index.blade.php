@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Clinics</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('clinics.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('clinics.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $clinics])

        </div>
    </div>

    @component('layouts.components.breadcrumb')
        @slot('title')
            Clinicas
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
                    {{route('clinics.create')}}
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
                    {{route('clinics.create')}}
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
                @include('clinics.table')
            @endslot
            @slot('paginate')
                @include('adminlte-templates::common.paginate', ['records' => $clinics])
            @endslot
        @endcomponent

    </div>
@endsection

