@extends('layouts.admin')
@section('contenido')

<div class="panel panel-primary">
	
 <div class="panel-heading"><h3>Registro de paciente</h3></div>

<div class="panel-body">
	


				{!!Form::open(['route' => 'paciente.store'])!!}
						   
						      @include('pacientes.form')





						   		  <div class="page-header"></div>
								<div class="form-group"> 
						         <div class="text-center">
											<button type="submit" class="btn btn-primary">
												<b class="glyphicon glyphicon-new-window"></b> Crear
											</button>
											<a href=" {{ route('paciente.index') }}" 
												class="btn btn-danger">
												<b class="glyphicon glyphicon-remove"></b> Salir
											</a>
										</div>
								</div>
				 {!!Form::close()!!}





</div>

</div>


						









 




@endsection