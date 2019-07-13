@extends('layouts.admin')
@section('contenido')


<div class="col-md-10 col-md-offset-1">
<div class="panel panel-success">
	<div class="panel-heading"><h1 class="text text-center"><span class="glyphicon glyphicon-file"></span> Consultas</h1></div>
<div class="panel-body">
	

<div class="form-group">
		 @if(session('mensaje'))
				<div class="alert alert-info">
					{{ session('mensaje') }}
				</div>
		@endif	
	</div>
			

<table class="table table-condensed table-hover">
	
	<thead>
		<tr>
		 <th>Fecha</th>
			<th>Paciente</th>
			<th>Detalle</th>
			
		
		</tr>
	</thead>
	<tbody>
	@foreach ($consulta as $con)
		
	
		<tr>
		    <td> {{$con->fechahora}}</td>
			<td>{{$con->paciente->nombreCompleto}}</td>
			<td> {{$con->detalle}}</td>
			
			

		</tr>

		@endforeach
	</tbody>
{{-- {{dd($con->fecha)}} --}}

</table>
 {!!$consulta->links()!!} 



</div>
</div>


</div>

@endsection
