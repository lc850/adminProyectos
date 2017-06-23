<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Encargado;
use DB;


class proyectosController extends Controller
{
    public function registrar(){
    	$encargados=Encargado::all();
    	return view('registrarProyectos', compact('encargados'));
    }

    public function guardar(Request $datos){
    	$proyecto = new Proyecto();
    	$proyecto->descripcion=$datos->input('descripcion');
    	$proyecto->fecha_inicio=$datos->input('fecha_inicio');
    	$proyecto->fecha_entrega=$datos->input('fecha_entrega');
    	$proyecto->encargado_id=$datos->input('encargado');
    	$proyecto->estado=$datos->input('estado');
    	$proyecto->save();

    	return redirect('/consultarProyectos');
    }

    public function consultar(){
    	//$proyectos=Proyecto::all();
    	$proyectos=DB::table('proyectos')
    		->join('encargados', 'proyectos.encargado_id', '=', 'encargados.id')
    		->select('proyectos.*', 'encargados.nombre')
    		->get();

    	return view('consultarProyectos', compact('proyectos'));
    }

    public function eliminar($id){
    	$proyecto=Proyecto::find($id);
    	$proyecto->delete();

    	return redirect('/consultarProyectos');
    }

}















