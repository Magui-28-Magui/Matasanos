<?php
namespace App\Http\Controllers;
use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        //
        $pacientes=Paciente::orderBy('id','DESC')->paginate(3);
        return view('Paciente.index',compact('pacientes'));
    }


    public function create()
    {
        //
        return view('Paciente.create');
    }


    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'edad'=>'required', 'telefono'=>'required', 'razon'=>'required', 'email'=>'required', 'departamento'=>'required', 'fecha'=>'required','doctor'=>'required' ]);
        Paciente::create($request->all());
        return redirect()->route('Paciente.index')->with('success','Registro creado satisfactoriamente');
    }


    public function show($id)
    {
        $pacientes=Paciente::find($id);
        return  view('Paciente.show',compact('pacientes'));
    }


    public function edit($id)
    {
        //
        $pacientes=Paciente::find($id);
        return view('Paciente.edit',compact('pacientes'));
    }


    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'edad'=>'required', 'telefono'=>'required', 'razon'=>'required', 'email'=>'required', 'departamento'=>'required', 'fecha'=>'required','doctor'=>'required' ]);

        Paciente::find($id)->update($request->all());
        return redirect()->route('Paciente.index')->with('success','Registro actualizado satisfactoriamente');

    }

    public function destroy($id)
    {
        //
        Paciente::find($id)->delete();
        return redirect()->route('Paciente.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
