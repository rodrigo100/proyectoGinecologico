@extends('layouts.admin')
@section('contenido')


<div class="panel-primary">
	<div class="panel-heading">
		<div class="form-group">
			<a href="{{ route('pdfhoy.pdfhoy') }}" class="btn btn-warning" title="decargar"> <span class="glyphicon glyphicon-download"></span> PDF</a>
		</div>
	</div>
	<div class="panel-body">
<div class="table-responsive">
			
				@include('reportes.repor')
</div>

	</div>


</div>




@endsection()