<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Encargado;


class proyectosController extends Controller
{
    public function registrar(){
    	$encargados=Encargado::all();
    	return view('registrarProyectos', compact('encargados'));
    }
}
