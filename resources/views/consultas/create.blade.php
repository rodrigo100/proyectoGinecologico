@extends('layouts.admin')
@section('contenido')


<div class="panel panel-primary">
	
<div class="panel-heading">
	<h3>Registrar consultas</h3>
</div>

<div class="panel-body">


{!!Form::open(['route' => 'consulta.store'])!!}
<div class="form-group">
  
	 <input type="hidden" class="form-control" name="id_paciente" value="{{ $consulta->id_paciente }} " >
</div>
 
 				 @include('consultas.form')



				
         <div class="text-center">
					<button type="submit" class="btn btn-primary">
						<b class="glyphicon glyphicon-new-window"></b> Crear
					</button>
					<a href="{{ route('paciente.index') }}" 
						class="btn btn-danger">
						<b class="glyphicon glyphicon-remove"></b> Salir
					</a>
				</div>

   {!!Form::close()!!}


 </div>

</div>


   









@endsection