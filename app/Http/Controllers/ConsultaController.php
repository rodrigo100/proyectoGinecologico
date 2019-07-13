<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Consulta;
use App\Modelos\Paciente;
use Illuminate\Support\Facades\Session;
class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $consulta= Consulta::latest('created_at')->paginate(5);
            return view('consultas.index',compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $consulta =$request->all();

     //  dd($consulta);
          Consulta::create($consulta);
        //  dd($consulta);
        //aqui traemos en inicio  de quien inicio sesion para almacenar como llave foranea
        //
       // $consulta->fecha=Carbon::createFromFormat('Y-m-d H:m:s',$request['fecha']);
       //  $paciente->id_usuario = auth()->user()->id_usuario;
       //   dd($paciente);
       Session::flash('consultar','consulta registrada exitosamente..!!!');
        return redirect()->route('paciente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $consulta = Paciente::findOrFail($id);
        //convertir a cadena
      //dd($consulta->fecha_nac->toDateString());
        //para calcular la edad
         // dd($paciente->fecha_nac->createFromDate(1992,06,04)->age);

        return view('consultas.create', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $consulta = Consulta::findOrFail($id);
        return view('consultas.edit', compact('consulta'));
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
         $consulta = Consulta::findOrFail($id);
        $consulta->fill($request->all());
        $consulta->save();
        return redirect()->route('paciente.index', 
            ['id' => $consulta->id_consulta]
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
        //
    }
}
