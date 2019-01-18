@extends ('layouts.app')
@section('content')
	@component('layouts.components.breadcrumb')
		@slot('title')
			<a class="link" href="{{route('access.users.index')}}">Controle de acesso</a>
		@endslot
		@slot('page')
			<li class="breadcrumb-item active" aria-current="page">Tipos de usuario</li>
		@endslot
	@endcomponent
	<div class="content">
		@include('flash::message')
		@component('layouts.components.table_box')
			@slot('classe')
				col-md-12
			@endslot
			@slot('color')
				success
			@endslot
			@slot('include')
				<div class="box-header with-border my-box-header">
					<h3 class="box-title"><strong>Novo Papel</strong></h3>
				</div><!-- /.box-header -->
				@component('layouts.components.form')
					@slot('route')
						{{ url('criar_rol') }}
					@endslot
					@slot('method')
						post
					@endslot
					@slot('inputs')
						@component('layouts.components.text_input')
							@slot('col')
								col-md-4
							@endslot
							@slot('labelName')
								rol_name
							@endslot
							@slot('placeholder')
								Nome do Papel
							@endslot
						@endcomponent
						@component('layouts.components.text_input')
							@slot('col')
								col-md-4
							@endslot
							@slot('labelName')
								rol_slug
							@endslot
							@slot('placeholder')
								Sigla
							@endslot
						@endcomponent
						@component('layouts.components.text_input')
							@slot('col')
								col-md-4
							@endslot
							@slot('labelName')
								rol_description
							@endslot
							@slot('placeholder')
								Descrição
							@endslot
						@endcomponent
					@endslot
					@slot('buttonStyle')
						success
					@endslot
					@slot('submitButton')
						Criar Novo Papel
					@endslot
				@endcomponent
			@endslot
		@endcomponent
		@component('layouts.components.table_box')
			@slot('classe')
				col-md-12
			@endslot
			@slot('color')
				success
			@endslot
			@slot('include')
				@include('access_control.roles.table')
			@endslot
			@slot('paginate')
				@include('adminlte-templates::common.paginate', ['records' => $roles])
			@endslot
		@endcomponent
	</div>
@endsection