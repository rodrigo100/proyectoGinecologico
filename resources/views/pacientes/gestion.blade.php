@extends('layouts.admin')
@section('contenido')


<div class="panel panel-primary">
	

<div class="panel-heading"><h1 class="text text-center"><span class="glyphicon glyphicon-dashboard"></span> Gestión de pacientes</h1> </div>



<div class="panel-body">
	

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
	@foreach ($paciente as $pa)
		
	
		<tr>
			<td><font color="blue" size="4">{{$pa->ci}}</font></td>
			<td>{{$pa->nombreCompleto}}</td>
			<td>{{$pa->direccion}}</td>
			<td>{{$pa->telefono}}</td>

			<td class="form-group">
							
							{!! Form::open(['route' => 
									['paciente.destroy', $pa->id_paciente],
							 	'method' => 'delete', 
							 	'class' => 'form-eliminar']) !!}
									

    						{{-- <a href=" --}}{{-- {{ route('usuarios.show', 
								['id' => $usuario->id_usuario]) }}" 
						{{-- 	class="btn btn-xs btn-info" title="Datos"> --}}
						{{-- 		<b class="glyphicon glyphicon-eye-open"></b>
							</a> --}} 
							


							<a href="{{ route('paciente.edit', 
								['id' => $pa->id_paciente]) }}" 
								class="btn btn-success" title="Editar">
								<b class="glyphicon glyphicon-edit"></b>
							</a>


		   							<button type="submit" class="btn btn-danger" title="Eliminar">
									<b class="glyphicon glyphicon-trash"></b>
								    </button>
   

								

                       


           					{!! Form::close() !!}

           					
							
								
							
			</td>

		</tr>
		@endforeach
	</tbody>
</table>

 {!!$paciente->render()!!} 
</div>

</div>
</div>



@endsection




@section('script')

<script src="{!! asset('js/script.js') !!}"></script>




@endsection