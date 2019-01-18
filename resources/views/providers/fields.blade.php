<!-- Codigo Clinica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_clinica', 'Codigo Clinica:') !!}
    {!! Form::number('codigo_clinica', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_endereco', 'Codigo Endereco:') !!}
    {!! Form::number('codigo_endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_banco', 'Codigo Banco:') !!}
    {!! Form::number('codigo_banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Fantasia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
    {!! Form::text('nome_fantasia', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Razao Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razao_social', 'Razao Social:') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atuacao', 'Atuacao:') !!}
    {!! Form::text('atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
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

<!-- Inscricao Estadual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscricao_estadual', 'Inscricao Estadual:') !!}
    {!! Form::text('inscricao_estadual', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_representante', 'Nome Representante:') !!}
    {!! Form::text('nome_representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Apelido Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apelido_representante', 'Apelido Representante:') !!}
    {!! Form::text('apelido_representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_representante', 'Email Representante:') !!}
    {!! Form::text('email_representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular_representante', 'Celular Representante:') !!}
    {!! Form::text('celular_representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone1 Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone1_representante', 'Telefone1 Representante:') !!}
    {!! Form::text('telefone1_representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone2 Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone2_representante', 'Telefone2 Representante:') !!}
    {!! Form::text('telefone2_representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacoes', 'Observacoes:') !!}
    {!! Form::textarea('observacoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('providers.index') !!}" class="btn btn-default">Cancel</a>
</div>
