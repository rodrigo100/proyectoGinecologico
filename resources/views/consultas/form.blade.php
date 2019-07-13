
<div class="row">

  <div class="col-xs-5">
			 <div class="label label-primary">
								 	 Fecha
			 </div>
  		{!!Form::text('fecha',Carbon\carbon::now()->format('Y-m-d'), ['class' => 'fecha form-control','placeholder'=>'yyyy-mm-dd'])!!}
  </div>
   <div class="col-xs-5">
			 <div class="label label-primary">
								 	 Hora
			 </div>
  		{!!Form::time('hora',Carbon\carbon::now()->format('H:i'), ['class' => 'form-control','placeholder'=>'dd/mm/yyyy'])!!}
  </div>

  <div class=col-xs-2>
  	
  </div>
  
</div>
	
<div class="form-group">
 <div class="label label-primary">
								 	 Detalles
			 </div>
	{!!Form::textarea('detalle',null, ['class' => 'form-control','placeholder'=>'Ingrese una breve descripcion'])!!}
</div>		





