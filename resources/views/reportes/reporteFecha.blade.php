

<!DOCTYPE html>
<html>
<head>
	<title></title>
				<style type="text/css" media="screen">

	    table
	    {
				/*border-collapse: collapse;
				width: 100%*/
				 width: 100%;
   border: 1px solid #000;
	    }	
	    td,th
	    {
			/*border: 0px solid;*/
			 width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
	    }
	    caption
	    {
	    	padding: 0.3em;
   color: #fff;
    background: #000;
	    }
th {
   background: #eee;
}

	</style>

</head>
<body>




<h1>Reporte de consultas</h1>
<table>
	
	<thead>
		<tr>
		    <th>Nº</th>
			<th>Paciente</th>
			<th>Fecha</th>
		</tr>
	</thead>
	<tbody>
	@forelse($consulta as $consul)
	
	
		<tr>
			<td>	{{$consul->id_consulta}}</td>
			<td>	{{$consul->paciente->nombreCompleto}}</td>
			<td>	{{$consul->fechahora}}</td>

		</tr>
			@empty
					<tr>
						<td colspan="3" class="text-center  ">
						<font size="4" face="raro, courier" color="red" class="text-center">no existe reporte en esta fecha</font></td>
					</tr>
		@endforelse
	</tbody>
</table>


</body>
</html>




