@extends('layouts.app')

@section('content')
    @component('layouts.components.breadcrumb')
        @slot('title')
            <a class="link" href="{{route('addresses.index')}}">Endereços</a>
        @endslot
        @slot('page')
            <li class="breadcrumb-item active" aria-current="page">Adicionar novo endereço</li>
        @endslot
    @endcomponent
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'addresses.store']) !!}

                        @include('addresses.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
