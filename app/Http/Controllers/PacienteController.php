<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index()
    {
        $pacientes = Paciente::get();
        return view('pacientes.index')->with('pacientes', $pacientes);
    }


    public function create()
    {
        return view('pacientes.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'razon' => 'required',
            'email' => 'required',
            'departamento' => 'required',
            'fecha' => 'required',
            'doctor' => 'required',

            $paciente = new Paciente();
        $paciente->nombre = $request->input('nombre');
        $paciente->edad  = $request->input('edad');
        $paciente->telefono  = $request->input('telefono');
        $paciente->razon  = $request->input('razon');
        $paciente->email = $request->input('email');
        $paciente->departamento  = $request->input('departamento');
        $paciente->fecha = $request->input('fecha');
        $paciente->doctor = $request->input('doctor');

        $paciente->save();

        return redirect()->route('paciente.index');

    }

    public function show(Paciente $paciente)
    {
        return view('pacientes.show',compact('pacientes'));
    }

    public function edit($id)
    {
        $paciente = Paciente::find($id);
        return view('pacientes.edit')->with('paciente',$paciente);
    }

    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'razon' => 'required',
            'email' => 'required',
            'departamento' => 'required',
            'fecha' => 'required',
            'doctor' => 'required',
        ]);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')
            ->with('success','Product updated successfully');
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->route('pacientes.index')
            ->with('success','Product deleted successfully');
    }
}
