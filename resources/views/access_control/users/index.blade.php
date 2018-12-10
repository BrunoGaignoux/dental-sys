@extends('layouts.app')

@section('content')

	@component('layouts.components.breadcrumb')
		@slot('title')
			Controle de acesso
		@endslot
	@endcomponent

	<div class="content">
		<div class="clearfix"></div>
		@include('flash::message')
		<div class="clearfix"></div>

		<div class="col-md-4">
			@component('layouts.components.table_box')
				@slot('classe')
					col
				@endslot
				@slot('color')
					success
				@endslot
				@slot('include')
					@component('layouts.components.form')
						@slot('route')
							{{ url('buscar_usuario') }}
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
									dado_buscado
								@endslot
								@slot('name')
								@endslot
								@slot('placeholder')
									Pesquisar:
								@endslot
							@endcomponent
						@endslot
						@slot('divClass')
							col-md-12
						@endslot
						@slot('buttonStyle')
							success
						@endslot
						@slot('submitButton')
							Buscar
						@endslot
					@endcomponent
				@endslot
			@endcomponent
			@component('layouts.components.add_new_button')
				@slot('classe')
					col
				@endslot
				@slot('route')
					{{ route('access.users.create') }}
				@endslot
			@endcomponent
			<br>
			<div class="row">
				@component('layouts.components.button')
					@slot('classe')
						col-md-6
					@endslot
					@slot('color')
						success
					@endslot
					@slot('route')
						{{ route('access.roles.create') }}
					@endslot
					@slot('title')
						Tipos de usuário
					@endslot
				@endcomponent
				@component('layouts.components.button')
					@slot('classe')
						col-md-6
					@endslot
					@slot('color')
						success
					@endslot
					@slot('route')
						{{ route('access.permissions.create') }}
					@endslot
					@slot('title')
						Permissões de usuário
					@endslot
				@endcomponent
			</div>
    	</div>

		@component('layouts.components.table_box')
			@slot('classe')
				col-md-8
			@endslot
			@slot('color')
				success
			@endslot
			@slot('include')
				@include('access_control.users.table')
			@endslot
			@slot('paginate')
				@include('adminlte-templates::common.paginate', ['records' => $usuarios])
			@endslot
		@endcomponent

	</div>

@endsection