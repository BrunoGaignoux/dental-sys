@component('layouts.components.table_box')
    @slot('classe')
        col-md-6
    @endslot
    @slot('header')
        <div class="box-header">
            <h3 class="box-title">Informações pessoais:</h3>
        </div>
    @endslot
    @slot('color')
        success
    @endslot
    @slot('include')
        {!! Form::open(['route' => 'patients.store']) !!}

            <!-- Nome Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', isset($pacient) ? $pacient->nome : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Rg Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('rg', 'Rg:') !!}
                {!! Form::text('rg', isset($pacient) ? $pacient->rg : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Sexo Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('sexo', 'Sexo:') !!}
                @if(isset($pacient))
                    {!! Form::select('sexo', [1 => 'Masculino', 2 => 'Feminino'], $pacient->sexo); !!}
                @else
                    {!! Form::select('sexo', [1 => 'Masculino', 2 => 'Feminino'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']); !!}
                @endif
            </div>

            <!-- Logradouro Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('logradouro', 'Logradouro:') !!}
                {!! Form::text('logradouro', isset($pacient) ? $address->logradouro : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Complemento Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('complemento', 'Complemento:') !!}
                {!! Form::text('complemento', isset($pacient) ? $address->complemento : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Numero Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('numero', 'Numero:') !!}
                {!! Form::number('numero', isset($pacient) ? $address->numero : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Cep Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('cep', 'Cep:') !!}
                {!! Form::text('cep', isset($pacient) ? $address->cep : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Bairro Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', isset($pacient) ? $address->bairro : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Cidade Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', isset($pacient) ? $address->cidade : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Estado Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('estado', 'Estado:') !!}
                {!! Form::text('estado', isset($pacient) ? $address->estado : null, ['class' => 'form-control']) !!}
            </div>

            <!-- Pais Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pais', 'Pais:') !!}
                {!! Form::text('pais', isset($pacient) ? $address->pais : null, ['class' => 'form-control']) !!}
            </div>
    @endslot
@endcomponent
@component('layouts.components.table_box')
    @slot('classe')
        col-md-6
    @endslot
    @slot('header')
        <div class="box-header">
            <h3 class="box-title">Informações de contato:</h3>
        </div>
    @endslot
    @slot('color')
        success
    @endslot
    @slot('include')
        <!-- Telefone1 Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('telefone1', 'Telefone 1:') !!}
            {!! Form::text('telefone1', isset($pacient) ? $pacient->telefone1 : null, ['class' => 'form-control']) !!}
        </div>

        <!-- Telefone2 Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('telefone2', 'Telefone 2:') !!}
            {!! Form::text('telefone2', isset($pacient) ? $pacient->telefone2 : null, ['class' => 'form-control']) !!}
        </div>

        <!-- Telefone Celular Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('celular', 'Telefone 3:') !!}
            {!! Form::text('celular', isset($pacient) ? $pacient->celular : null, ['class' => 'form-control']) !!}
        </div>

        <!-- Email Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', isset($pacient) ? $pacient->email : null, ['class' => 'form-control']) !!}
        </div>
    @endslot
@endcomponent
@if(isset($patient))
    @component('layouts.components.table_box')
        @slot('classe')
            col-md-6
        @endslot
        @slot('header')
            <div class="box-header">
                <h3 class="box-title">Informações de contato:</h3>
            </div>
        @endslot
        @slot('color')
            success
        @endslot
        @slot('include')
            <!-- Numero Prontuario Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('numero_prontuario', 'Numero Prontuario:') !!}
                {!! Form::text('numero_prontuario', $patient->numero_prontuario, ['class' => 'form-control']) !!}
            </div>

            <!-- Numero Documento Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('numero_documento', 'Numero Documento:') !!}
                {!! Form::text('numero_documento', $patient->numero_documento, ['class' => 'form-control']) !!}
            </div>

            <!-- Tipo Documento Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('tipo_documento', 'Tipo Documento:') !!}
                {!! Form::text('tipo_documento', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Cpf Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('cpf', 'Cpf:') !!}
                {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Dependente Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('dependente', 'Dependente:') !!}
                {!! Form::number('dependente', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Estadocivil Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('estadocivil', 'Estadocivil:') !!}
                {!! Form::number('estadocivil', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Naturalidade Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('naturalidade', 'Naturalidade:') !!}
                {!! Form::text('naturalidade', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Nacionalidade Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
                {!! Form::text('nacionalidade', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Nascimento Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nascimento', 'Nascimento:') !!}
                {!! Form::date('nascimento', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Codigo Operadora Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('codigo_operadora', 'Codigo Operadora:') !!}
                {!! Form::text('codigo_operadora', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Preferencial Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('preferencial', 'Preferencial:') !!}
                {!! Form::text('preferencial', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Nome Referencia Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nome_referencia', 'Nome Referencia:') !!}
                {!! Form::number('nome_referencia', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Observacoes Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('observacoes', 'Observacoes:') !!}
                {!! Form::text('observacoes', null, ['class' => 'form-control']) !!}
            </div>
        @endslot
    @endcomponent
@endif
@component('layouts.components.table_box')
    @slot('classe')
        col-md-6
    @endslot
    @slot('header')
        <div class="box-header">
            <h3 class="box-title">Informações de agendamento:</h3>
        </div>
    @endslot
    @slot('color')
        success
    @endslot
    @slot('include')
        <!-- Status Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('status', 'Status:') !!}
            @if(isset($pacient))
                {!! Form::select('status', [1 => 'Agendado', 2 => 'Cancelado'], $pacient->status); !!}
            @else
                {!! Form::select('status', [1 => 'Agendado', 2 => 'Cancelado'], 1, ['class' => 'form-control', 'placeholder' => 'Selecione...', 'disabled']); !!}
            @endif
        </div>

        <!-- Datastatus Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('datastatus', 'Data e hora:') !!}
            {!! Form::date('datastatus', isset($pacient) ? $pacient->datastatus : null, ['class' => 'form-control']) !!}
        </div>

        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
    @endslot
@endcomponent