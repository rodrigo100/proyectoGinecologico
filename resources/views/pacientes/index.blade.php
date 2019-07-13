@extends('layouts.admin')
@section('contenido')

 
<div class="row">
	
<div class="col-md-2"></div>
<div class="col-md-8">
	                {!! Form::open([
								'route' => 'paciente.index', 
								'method' => 'get',
								'class' => 'pull-right',
								]) !!}
								
								<div class="input-group">
								
									{!! Form::text('buscar', old('', Request::input('buscar')), [
										'class' => 'form-control',
										'placeholder' => 'Buscar por: nombre/ap.paterno/carnet de identidad',
										]) !!}
									<span class="input-group-btn">
										<button type="submit" class="btn btn-danger">
											<b class="glyphicon glyphicon-search">Buscar</b>
										</button>
										<a href="{{ route('paciente.create') }}" class="btn btn-success">
								<b class="glyphicon glyphicon-new-window"></b> Registrar
							</a>
									</span>
								</div>
							{!! Form::close() !!}</h3>
</div>
<div class="col-md-2"></div>
</div>


<div class="page-header"></div>
<div class="panel panel-primary">
	
		<div class="panel-heading">
				
					
							<h1 class="text text-center"><span class="glyphicon glyphicon-user"></span> Pacientes	</h1>
						
							


					
			</div>


	<div class="panel-body">
		
		 @if (Session::has('insertado'))
                <div class="alert alert-success">
                  {{Session::get('insertado')}}
                </div>
                  
                @endif
                 @if (Session::has('consultar'))
                <div class="alert alert-success">
                  {{Session::get('consultar')}}
                </div>
                  
                @endif

<div class="table-responsive">
  <table class="table table-condensed table-hover">
	
	<thead>
		<tr>
			<th><font color="blue" size="4">C.I.</font></th>
			<th><font color="blue" size="4">Nombre</font></th>
			<th><font color="blue" size="4">Dirección</font> </th>
			<th><font color="blue" size="4">Teléfono</font> </th>
			
			<th> <font color="red" size="4">Acciones</font></th>

		</tr>
	</thead>
	<tbody>
		@forelse($paciente as $pac)
		
	
		<tr>
			<td><font color="blue" size="4">{{$pac->ci}}</font></td>
			<td>{{$pac->nombreCompleto}}</td>
			<td>{{$pac->direccion}}</td>
			<td>{{$pac->telefono}}</td>
			<td>  <a href="{{ route('consulta.show', ['id' => $pac->id_paciente]) }}" class="btn btn-success" title="Nueva consulta">
											<span class="glyphicon glyphicon-plus"> </span> </a>
			
			  <a href="{{ route('paciente.show', ['id' => $pac->id_paciente]) }}" class="btn btn-primary" title="Historial de consultas">
											<span class="glyphicon glyphicon-file"> </span> </a>
				</td>


{{-- {{dd($pac->fecha_nac)}} --}}


		</tr>
		@empty 
					<tr>
						<td colspan="3" class="text-center  ">
						<font size="4" face="raro, courier" color="red" class="text-center">El paciente no existe</font></td>
					</tr>
		@endforelse
	</tbody>
</table>
{!!$paciente->links()!!} 

 </div>

	</div>






</div>



<div class="form-group">
		 @if(session('mensaje'))
				<div class="alert alert-info">
					{{ session('mensaje') }}
				</div>
		@endif	
	</div>
			


  








@endsection