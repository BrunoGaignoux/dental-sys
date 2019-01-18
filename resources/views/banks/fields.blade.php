<!-- Codigo Clinica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_clinica', 'Codigo Clinica:') !!}
    {!! Form::number('codigo_clinica', null, ['class' => 'form-control']) !!}
</div>

<!-- Gerar Boleto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gerar_boleto', 'Gerar Boleto:') !!}
    {!! Form::number('gerar_boleto', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Boleto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_boleto', 'Tipo Boleto:') !!}
    {!! Form::text('tipo_boleto', null, ['class' => 'form-control']) !!}
</div>

<!-- Agencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agencia', 'Agencia:') !!}
    {!! Form::text('agencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Conta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conta', 'Conta:') !!}
    {!! Form::text('conta', null, ['class' => 'form-control']) !!}
</div>

<!-- Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banco', 'Banco:') !!}
    {!! Form::text('banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Carteira Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carteira', 'Carteira:') !!}
    {!! Form::text('carteira', null, ['class' => 'form-control']) !!}
</div>

<!-- Juros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juros', 'Juros:') !!}
    {!! Form::number('juros', null, ['class' => 'form-control']) !!}
</div>

<!-- Multa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('multa', 'Multa:') !!}
    {!! Form::number('multa', null, ['class' => 'form-control']) !!}
</div>

<!-- Tarifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa', 'Tarifa:') !!}
    {!! Form::number('tarifa', null, ['class' => 'form-control']) !!}
</div>

<!-- Mensagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mensagem', 'Mensagem:') !!}
    {!! Form::text('mensagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('banks.index') !!}" class="btn btn-default">Cancel</a>
</div>
