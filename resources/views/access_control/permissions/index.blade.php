@extends ('layouts.app')
@section('content')
	@component('layouts.components.breadcrumb')
		@slot('title')
			<a class="link" href="{{route('access.users.index')}}">Controle de acesso</a>
		@endslot
		@slot('page')
			<li class="breadcrumb-item active" aria-current="page">Permissões</li>
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
					<h3 class="box-title"><strong>Nova Permissão</strong></h3>
				</div><!-- /.box-header -->
				<hr style="border-color:white;" />
				<div class="col-md-6">
					@component('layouts.components.form')
						@slot('route')
							{{ url('agregar_permiso') }}
						@endslot
						@slot('method')
							post
						@endslot
						@slot('inputs')
							@component('layouts.components.select_input')
								@slot('col')
									col-sm-6
								@endslot
								@slot('labelName')
									tipo
								@endslot
								@slot('name')
									Papel*
								@endslot
								@slot('selectId')
									rol_sel
								@endslot
								@slot('selectName')
									tipo
								@endslot
								@slot('options')
									@foreach($roles as $rol)
										<option value="{{ $rol->id }}">{{ $rol->name }}</option>
									@endforeach
								@endslot
							@endcomponent
							@component('layouts.components.select_input')
								@slot('col')
									col-sm-6
								@endslot
								@slot('labelName')
									permissoes
								@endslot
								@slot('name')
									Permissão*
								@endslot
								@slot('selectId')
									permiso_rol
								@endslot
								@slot('selectName')
									permissoes
								@endslot
								@slot('options')
									@foreach($permisos as $permiso)
										<option value="{{ $permiso->id }}">{{ $permiso->name }}</option>
									@endforeach
								@endslot
							@endcomponent
						@endslot
						@slot('buttonStyle')
							success
						@endslot
						@slot('submitButton')
							Agregar Permissão
						@endslot
					@endcomponent
				</div>
			    <div class="col-md-6">
					@component('layouts.components.form')
						@slot('route')
							{{ url('criar_permiso') }}
						@endslot
						@slot('method')
							post
						@endslot
						@slot('inputs')
							@component('layouts.components.text_input')
								@slot('col')
									col-md-12
								@endslot
								@slot('labelName')
									permission_name
								@endslot
								@slot('placeholder')
									Permissão*
								@endslot
							@endcomponent
							@component('layouts.components.text_input')
								@slot('col')
									col-md-12
								@endslot
								@slot('labelName')
									permission_slug
								@endslot
								@slot('placeholder')
									Sigla*
								@endslot
							@endcomponent
							@component('layouts.components.text_input')
								@slot('col')
									col-md-12
								@endslot
								@slot('labelName')
									permission_description
								@endslot
								@slot('placeholder')
									Descrição*
								@endslot
							@endcomponent
						@endslot
						@slot('buttonStyle')
							success
						@endslot
						@slot('submitButton')
							Criar Nova Permissão
						@endslot
					@endcomponent
                </div>
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
		@endcomponent
	</div>
@endsection