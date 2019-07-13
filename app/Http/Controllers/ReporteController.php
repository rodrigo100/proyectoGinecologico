<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Consulta;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Session;
class ReporteController extends Controller
{
   

           protected $fe=null;



    
    public function index(Request $request)
    {



        
                $fecha = $request->input('buscar');
              $ff=$fecha;
               $fecha = "%$fecha%";
               // $this->fe=$fecha;
             // dd($this->fe); 
               Session::put('fecha',$ff);
               
            $consulta= Consulta::latest('fecha')->where('fecha','like',$fecha)->paginate(2000);
           return view('reportes.reporteConsulta',compact('consulta'));
        
    }
     public function semana()
    {
         //reportes de la fecha actual
              $date= Carbon::now()->format('Y-m-d');
              $consulta= Consulta::latest('fecha')->where('fecha','like',$date)->paginate(2000);
               return view('reportes.reporteSemana',compact('consulta','date'));
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

   public function pdfhoy()
   {
       
             $date= Carbon::now()->format('Y-m-d');
              $consulta= Consulta::latest('fecha')->where('fecha','like',$date)->paginate(2000);
             
              $pdf=\PDF::loadView('reportes.repor',['consulta'=> $consulta]);
              return $pdf->stream('reporte-'.$date.'.pdf'); 

   }
   public function pdfporfecha(Request $request)
   {
             
              
          if(Session::get('fecha')!=null)
          {
              $consulta= Consulta::where('fecha','like', Session::get('fecha'))->paginate(2000);
              
              $pdf=\PDF::loadView('reportes.reporteFecha',['consulta'=> $consulta]);
              return $pdf->stream('reporte-'.Session::get('fecha').'.pdf'); 
          }
          else
          {
              $consulta= Consulta::all();
              $pdf=\PDF::loadView('reportes.reporteFecha',['consulta'=> $consulta]);
              return $pdf->stream('reporte-General.pdf'); 
          }



          
        
                     
                

         
        
   }
   
}
