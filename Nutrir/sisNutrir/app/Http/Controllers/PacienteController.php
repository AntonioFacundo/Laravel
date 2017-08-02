<?php

namespace sisNutrir\Http\Controllers;



use Illuminate\Http\Request;
use sisNutrir\Pacientes;
use Illuminate\Support\Facades\Redirect;
use sisNutrir\Http\Requests\PacienteFormRequest;
use DB;

class PacienteController extends Controller
{
    public function __contruct(){

    }

    public function index(Request $request){

    	if($request){

    		$query = trim($request->get('searchText'));
    		$pacientes=DB::table('pacientes')
    		->where('nombre','LIKE','%'.$query.'%')
    		->orderBy('idpacientes','desc')
    		->paginate(10);

    		return view('nutrir.pacientes.index', ["pacientes"=>$pacientes, "searchText"=>$query]);
    	}

    }

    public function create(){
    	return view("nutrir.pacientes.create");
    }

    public function store(PacienteFormRequest $request){
    	$paciente = new Pacientes;
    	$paciente->nombre = $request->get('nombre');
    	$paciente->apellidop = $request->get('apellidop');
    	$paciente->apellidom = $request->get('apellidom');
    	$paciente->genero = $request->get('genero');
    	$paciente->edad = $request->get('edad');
    	$paciente->correo = $request->get('correo');
    	$paciente->telefono = $request->get('telefono');

    	$paciente->save();

    	return Redirect::to('nutrir/pacientes');
    }

    public function show($id){
    	return view("nutrir.pacientes.show", ["paciente"=>Pacientes::findOrFail("$id")]);
    }

    public function edit($id){
    	return view("nutrir.pacientes.edit", ["paciente"=>Pacientes::findOrFail("$id")]);
    }

    public function update(PacienteFormRequest $request, $id){

    	$paciente = Pacientes::findOrFail($id);
    	$paciente->nombre = $request->get('nombre');
    	$paciente->apellidop = $request->get('apellidop');
    	$paciente->apellidom = $request->get('apellidom');
        $paciente->edad = $request->get('edad');
    	$paciente->genero = $request->get('genero');
    	$paciente->correo = $request->get('correo');
    	$paciente->telefono = $request->get('telefono');

    	$paciente->update();

    	return Redirect::to('nutrir/pacientes');
    }

    public function destroy($id){
    	$paciente = Pacientes::findOrFail($id);
    	$paciente->update;

    	return Redirect::to('nutrir/pacientes');
    }
}
