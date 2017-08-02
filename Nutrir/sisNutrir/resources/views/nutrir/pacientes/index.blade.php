@extends ('layouts.admin')
@section ('contenido')
	
<div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Pacientes <a href="pacientes/create"><button class="btn btn-info">Nuevo</button></a></h3>
		@include('nutrir.pacientes.search')
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Edad</th>
					<th>Correo</th>
					<th>Telefono</th>
				</thead>
				
				@foreach ($pacientes as $pas)

				<tr>
					<td>{{$pas->idpacientes}}</td>
					<td>{{$pas->nombre}}</td>
					<td>{{ $pas->apellidop}}</td>
					<td>{{ $pas->apellidom}}</td>
					<td>{{ $pas->edad}}</td>
					<td>{{ $pas->correo}}</td>
					<td>{{ $pas->telefono}}</td>

					<td>
						<a href="">
						<button class="btn btn-info">Imprimir</button>
						</a>
						<a href="">
						<button class="btn btn-info">Registro</button>
						</a>
						<a href="">
						<button class="btn btn-info">Historial</button>
						</a>
						<a href="{{URL::action('PacienteController@edit', $pas->idpacientes)}}">
						<button class="btn btn-info">Editar</button>
						</a>
						<a href="">
						<button class="btn btn-danger">Eliminar</button>
						</a>
					</td>

				</tr>

				 @endforeach
				 </table>
			</div>
			{{$pacientes->render()}}
		</div>
	</div>
</div>

@endsection