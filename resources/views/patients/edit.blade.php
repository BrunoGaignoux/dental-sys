@extends('layouts.app')

@section('content')
    @component('layouts.components.breadcrumb')
        @slot('title')
            <a class="link" href="{{route('patients.index')}}">Patientes</a>
        @endslot
        @slot('page')
            <li class="breadcrumb-item active" aria-current="page">{{ !isset($schedule->nome_paciente) ? $patient->nome : $schedule->nome_paciente }}</li>
        @endslot
    @endcomponent
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'patch']) !!}

                        @include('patients.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection