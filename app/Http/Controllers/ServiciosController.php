<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    //
    public function index(){
    	$servicios = Servicios::join('emps', 'emps.id_emp', '=', 'servicios.emp_id')->select('servicios.*', 'emps.e_nombre')->get();
    	return view('servicio', compact('servicios'));
    }
}
