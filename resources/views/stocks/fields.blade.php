<!-- Codigo Clinica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_clinica', 'Codigo Clinica:') !!}
    {!! Form::number('codigo_clinica', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Produtos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_produtos', 'Codigo Produtos:') !!}
    {!! Form::number('codigo_produtos', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_pedido', 'Codigo Pedido:') !!}
    {!! Form::number('codigo_pedido', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Plano Contas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_plano_contas', 'Codigo Plano Contas:') !!}
    {!! Form::number('codigo_plano_contas', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_usuario', 'Codigo Usuario:') !!}
    {!! Form::number('codigo_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_nivel', 'Codigo Nivel:') !!}
    {!! Form::number('codigo_nivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade', 'Quantidade:') !!}
    {!! Form::number('quantidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('motivo', 'Motivo:') !!}
    {!! Form::textarea('motivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Acao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_acao', 'Tipo Acao:') !!}
    {!! Form::date('tipo_acao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('stocks.index') !!}" class="btn btn-default">Cancel</a>
</div>
