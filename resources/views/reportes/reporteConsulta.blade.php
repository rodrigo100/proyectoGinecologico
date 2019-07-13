@extends('layouts.admin')
@section('contenido')
 

	 		
<div class="panel panel-primary">
	<div class="panel-heading">
     	 {!! Form::open([
								'route' => 'reporte.index', 
								'method' => 'get',
								'class' => 'pull-right',
								]) !!}
								
								<div class="input-group">
								
									{!! Form::text('buscar', old('', Request::input('buscar')), [
										'class' => 'buscar form-control',
										'placeholder' => 'yyyy-mm-dd',
										]) !!}
									<span class="input-group-btn">
										<button type="submit" class="btn btn-danger" onclick="mi_funcion()">
											<b class="glyphicon glyphicon-search">Buscar</b>
										</button>
										
									</span>
								</div>
								
							{!! Form::close() !!}
	<div class="form-group">
			<a href="{{ route('pdfporfecha.pdfporfecha') }} " class="btn btn-warning" title="decargar"> <span class="glyphicon glyphicon-download"></span> PDF</a>
    			
	{{-- 	<input type="text" class="form-control" name="fecha" id="fecha"	value="{{Session::get('fecha')}}"> --}}

		</div>




	</div>

	<div class="panel-body">
 @if (Session::has('vacio'))
                <div class="alert alert-success">
                  {{Session::get('vacio')}}
                </div>
                  
                @endif



	<div class="table-responsive">

		



			  	<table class="table table-condensed table-hover">
					
			<thead>
						<tr>
							<th><font color="blue" size="4">Paciente</font></font></th>
							<th><font color="blue" size="4">Fecha y hora</font></font></font></th>
						</tr>
					</thead>
					<tbody>
					@forelse ($consulta as $consul)
										
									
										<tr>

											<td>{{$consul->paciente->nombreCompleto}}</td>
											<td>{{$consul->fechahora}}</td>
										</tr>


					@empty
					<tr>
						<td colspan="3" class="text-center  ">
						<font size="4" face="raro, courier" color="red" class="text-center">no existe reporte en esta fecha</font></td>
					</tr>
									@endforelse
					</tbody>
				</table> 







	</div>






</div>

</div>


@endsection