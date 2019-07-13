@extends('layouts.admin')
@section('contenido')



	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Editar paciente</h3>
		</div>
		<div class="panel-body">
			{!! Form::model($paciente, [
				'route' => ['paciente.update', $paciente->id_paciente],
				'method' => 'put',
				]) !!}
				@include('pacientes.form')		
   
         <div class="page-header"></div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary">
						<b class="glyphicon glyphicon-edit"></b> Actualizar
					</button>
					<a class="btn btn-danger" 
						href="{{ route('paciente.gestion') }}">
						<b class="glyphicon glyphicon-remove"></b> Salir
					</a>
				</div>
			{!! Form::close() !!}	
		</div>
	</div>
<




@endsection