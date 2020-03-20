<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ServicioRequest;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicios::join('emps', 'emps.id_emp', '=', 'servicios.emp_id')->select('servicios.*', 'emps.e_nombre')->get();
        return view('servicio', compact('servicios'));
    }
    /*
    * Mostrar formulario para agregar un nuevo servicio.
    * Acceso denegado para los cliente y/o personas.
    */
    public function formServicio()
    {
        return view('formServicios');       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function nuevoServicio(Request $request)
    {
        
        if($request->has('opcion'))
        {
            $this->validatorOpcion($request->all())->validate();
            $this->create($request->all(), $request->user()->id_user);
            return "chau";
        }else{
            $this->validatorNoOpcion($request->all())->validate();
             return "hola";
        }
    }

    public function validatorNoOpcion(array $data)
    {
        return Validator::make($data, [
            'tipoServicio' =>['required'],
            'abiertoMatutino' =>['required_without: opcion']
        ]);
    }
    public function validatorOpcion(array $data)
    {
        return Validator::make($data, [
            'tipoServicio' =>['required'],
            'opcion' => ['required_without: abiertoMatutino']
        ]);
    }
    /*
    * Debe haber dos metodos create
    *  - uno debe tener solo 24hs -> true y los demas horarios null
    *  - segundo debe tener 24hs-> null
    */
    public function create(array $data, $id)
    {
       return Servicios::create([
            //'name' => $data['name'],
            's_descripcion' => $data['informacion'],
            'creado_en' => now(),
            'emp_id' => $id,
            //hora de atencion
            //las cuatros campo de atencion nullable
            'tipoServicio_id' => 1
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
