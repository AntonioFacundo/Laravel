@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-md-6">
			<h3>Editar paciente: {{$paciente->nombre}}</h3>

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($paciente,['method'=>'PATCH','route'=>['pacientes.update',$paciente->idpacientes]]) !!}

			{{Form::token()}}

			<div class="form-group">
				<label for="nombre">
					Nombre
				</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{$paciente->nombre}}">
			</div>

			<div class="form-group">
				<label for="apellidop">
					Apellido paterno
				</label>
				<input type="text" name="apellidop" class="form-control" placeholder="Apellido..." value="{{$paciente->apellidop}}">
			</div>

			<div class="form-group">
				<label for="apellidom">
					Apellido materno
				</label>
				<input type="text" name="apellidom" class="form-control" placeholder="Apellido..." value="{{$paciente->apellidom}}">
			</div>

			<div class="form-group">
				<label for="edad">
					Edad
				</label>
				<input type="text" name="edad" class="form-control" placeholder="Edad..." value="{{$paciente->edad}}">
			</div>

			<div class="form-group">
				<label for="correo">
					Correo
				</label>
				<input type="text" name="correo" class="form-control" placeholder="Correo..." value="{{$paciente->correo}}">
			</div>

			<div class="form-group">
				<label for="telefono">
					Telefono
				</label>
				<input type="text" name="telefono" class="form-control" placeholder="Telefono..." value="{{$paciente->telefono}}">
			</div>

			<div class="form-group">
				
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>

			</div>

			{{Form::close()}}

		</div>
	</div>
@endsection