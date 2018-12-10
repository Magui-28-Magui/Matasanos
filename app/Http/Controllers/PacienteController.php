<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index()
    {
        $pacientes = Paciente::latest()->paginate(5);

        return view('pacientes.index',compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        ]);

        Paciente::create($request->all());

        return redirect()->route('pacientes.index')
            ->with('success','Product created successfully.');
    }

    public function show(Paciente $paciente)
    {
        return view('pacientes.show',compact('pacientes'));
    }

    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit',compact('pacientes'));
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
