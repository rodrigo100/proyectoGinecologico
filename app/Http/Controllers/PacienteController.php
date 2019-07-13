<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Paciente;
use App\Modelos\Consulta;
use Carbon\Carbon;
use App\Http\Requests\PacienteForm;
use App\Http\Requests\PacienteFormUpdate;

use Illuminate\Support\Facades\Session;



class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @ret4urn \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

  ;

         $param = $request->input('buscar');
        $param = "%$param%";
         
            $paciente= Paciente::latest('created_at')->where('ci','like',$param)
             ->orWhere('nombre', 'like', $param)
             ->orWhere('ap_paterno', 'like', $param)->paginate(5);
           
            return view('pacientes.index',compact('paciente'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteForm $request)
    {
        $paciente = new Paciente($request->all());
        //aqui traemos en inicio  de quien inicio sesion para almacenar como llave foranea
         // 
      // $paciente->fecha_nac=Carbon::createFromFormat('Y-m-d',$request['fecha_nac']);
       // dd($paciente);
        $paciente->id_usuario = auth()->user()->id_usuario;
      
        $paciente->save();
       Session::flash('insertado',$paciente->nombre.','.'fue registrado exitosamente..!!!');
        return redirect()->route('paciente.index', ['id' => $paciente->id_paciente]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
     $paciente = Paciente::findOrFail($id);

        return view('pacientes.historial', compact('paciente'));




        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteFormUpdate $request, $id)
    {
       $paciente = Paciente::findOrFail($id);
        $paciente->fill($request->all());
        $paciente->save();
        return redirect()->route('paciente.gestion', 
            ['id' => $paciente->id_paciente]
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
       //   Session::flash('registrado',$paciente->nombre.','.'fue eliminado exitosamente..!!!');
        return redirect()->route('paciente.gestion');
    }


   public function gestion()
   {
     
     $paciente= Paciente::orderBy('ap_paterno')->paginate(5);
     return view('pacientes.gestion',compact('paciente'));
   }



}
