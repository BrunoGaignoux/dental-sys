<!-- Codigo Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_anterior', 'Codigo Anterior:') !!}
    {!! Form::text('codigo_anterior', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Clinica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_clinica', 'Codigo Clinica:') !!}
    {!! Form::number('codigo_clinica', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_status', 'Codigo Status:') !!}
    {!! Form::number('codigo_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_paciente', 'Codigo Paciente:') !!}
    {!! Form::number('codigo_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Plano Tratamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_plano_tratamento', 'Codigo Plano Tratamento:') !!}
    {!! Form::number('codigo_plano_tratamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Agenda Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agenda_tipo', 'Agenda Tipo:') !!}
    {!! Form::number('agenda_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Dentista Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_dentista', 'Codigo Dentista:') !!}
    {!! Form::number('codigo_dentista', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Especialidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_especialidade', 'Codigo Especialidade:') !!}
    {!! Form::number('codigo_especialidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Restricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('restricao', 'Restricao:') !!}
    {!! Form::number('restricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_paciente', 'Nome Paciente:') !!}
    {!! Form::text('nome_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Preferencial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preferencial', 'Preferencial:') !!}
    {!! Form::text('preferencial', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone1', 'Telefone1:') !!}
    {!! Form::text('telefone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone2', 'Telefone2:') !!}
    {!! Form::text('telefone2', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Operadora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operadora', 'Operadora:') !!}
    {!! Form::number('operadora', null, ['class' => 'form-control']) !!}
</div>

<!-- Encaixe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encaixe', 'Encaixe:') !!}
    {!! Form::number('encaixe', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::date('start_time', null, ['class' => 'form-control']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::date('end_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Alldayevent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alldayevent', 'Alldayevent:') !!}
    {!! Form::number('alldayevent', null, ['class' => 'form-control']) !!}
</div>

<!-- Timezone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timezone', 'Timezone:') !!}
    {!! Form::text('timezone', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', 'Observacao:') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('schedules.index') !!}" class="btn btn-default">Cancel</a>
</div>
