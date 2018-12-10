@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dentist
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dentist, ['route' => ['dentists.update', $dentist->id], 'method' => 'patch']) !!}

                        @include('dentists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection