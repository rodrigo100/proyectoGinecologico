@extends('layouts.admin')
@section('contenido')


<div class="col-md-6 col-md-offset-3">


<div class="panel panel-success">
	
	<div class="panel-heading"><h1><span class="glyphicon glyphicon-check"></span> Historial médico</h1></div>


	<div class="panel-body">
<div class="table-responsive">
		<table class="table table-condensed table-hover">
		 <font size="4" face="impact">Paciente: {{$paciente->nombreCompleto}}</font>
		<tr>
			<th><font color="green" size="4">Fecha</font></th>
			<th><font color="green" size="4">Detalle</font></th>
		</tr>
	</thead>
	<tbody>
	{{-- $paciente->consulta de esta forma se accede a la relacion de paciente con consdulta mediante el metodo consulta. la se puede trer tos los datos de la tabla consulta --}}
	@forelse($paciente->consulta as $pa)
		
		<tr>
			<td>{{$pa->fechaHora}}</td>
			<td>{{$pa->detalle}}</td>

			<td>
				 <a href="{{ route('consulta.edit', ['id' => $pa->id_consulta]) }}" class="btn btn-warning" title="Editar historial">
											<span class="glyphicon glyphicon-edit"> </span> </a>
			</td>

		</tr>
		@empty
		<tr>
						<td colspan="3" class="text-center  ">
						<font size="4" face="raro, courier" color="red" class="text-center">El paciente no tiene historial</font></td>
					</tr>
	@endforelse
	</tbody>
</table>
</div>
   <div class="text-center">
					
					<a href="{{ route('paciente.index') }}" 
						class="btn btn-danger">
						<b class="glyphicon glyphicon-remove"></b> Salir
					</a>
				</div>


</div>
</div>
</div>
@endsection