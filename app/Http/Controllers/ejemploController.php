<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejemploController extends Controller
{
    public function index(){
    	$nombre="Luis";
    	$edad=20;
    	return view('ejemplo', compact('nombre', 'edad'));
    }
}
