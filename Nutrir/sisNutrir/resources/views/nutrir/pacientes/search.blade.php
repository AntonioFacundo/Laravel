{!! Form::open(array('url'=>'nutrir/pacientes', 'method'=>'GET','autocomplete'=>'on', 'role'=>'search')) !!}

<div class="form-group">
	<div class="input-group col-md-3">
		<input type="text" name="searchText" class="form-control" placeholder="Buscar por nombre..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">
				Buscar
			</button>
		</span>
	</div>
</div>

{!!Form::close()!!}