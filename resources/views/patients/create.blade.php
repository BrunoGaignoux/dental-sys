@extends('layouts.app')

@section('content')
    @component('layouts.components.breadcrumb')
        @slot('title')
            <a class="link" href="{{route('schedules.index')}}">Agenda de avaliação - Pacientes</a>
        @endslot
        @slot('page')
            <li class="breadcrumb-item active" aria-current="page">Agendamento presencial</li>
        @endslot
    @endcomponent
    @include('adminlte-templates::common.errors')
    @include('patients.fields')
@endsection
