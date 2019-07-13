

<div class="row">
	

<div class="col-md-3">
						
						  	  @if($errors->has('ci'))
       					 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('ci') }}
					  		  </div>
				     		 @else
					<div class="form-group">
					@endif
						 	<div class="label label-primary">
												 	 Carnet de Identidad
							 </div>
				  			<div class="input-group">
				  			 <span class="input-group-addon"><i>#</i></span>
				  	         {!! Form::text('ci', null, ['class' => 'form-control','placeholder'=>'Número de identidad']) !!}
				  			</div>
				     </div>
				  

</div>

<div class="col-md-3">
						  @if($errors->has('nombre'))
       					 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('nombre') }}
					  		  </div>
				     		 @else
    		 		<div class="form-group">
    		 		@endif
 						<div class="label label-primary">
								 	Nombre Completo
						 </div>
  	 			
					{!! Form::text('nombre', null, ['class' => 'form-control','placeholder'=>'Ingrese su nombre']) !!}
  					</div>


</div>




<div class="col-md-3">
					  @if($errors->has('ap_paterno'))
       					 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('ap_paterno') }}
					  		  </div>
				     		 @else
	 				<div class="form-group">  
	 				@endif		 
							<div class="label label-primary">
								 	Apellido Paterno
				 			</div>
	
						{!! Form::text('ap_paterno', null, ['class' => 'form-control','placeholder'=>'Ingrese apellido paterno']) !!}
					</div>
		
</div>




<div class="col-md-3">
 							 @if($errors->has('ap_materno'))
       					 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('ap_materno') }}
					  		  </div>
				     		 @else
					<div class="form-group">	
					@endif 
							<div class="label label-primary">
												 	Apellido Materno
							</div>
				   
								{!! Form::text('ap_materno', null, ['class' => 'form-control','placeholder'=>'Ingrese apellido materno']) !!}
					</div>
			
</div>


</div>







<div class="row">
	
	<div class="col-md-3">


	   						  @if($errors->has('fecha_nac'))
       					 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('fecha_nac') }}
					  		  </div>
				     		 @else
						 <div class="form-group">
							@endif
						    		 <div class="label label-primary">
														 	Fecha de Nacimiento
									</div>
					
									<div class="input-group">
					
								 	 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									{!!Form::text('fecha_nac',null,['class' => 'fecha_nac form-control','placeholder'=>'yyyy-mm-dd']) !!} 
									</div>
						</div>
	</div>



	<div class="col-md-3">
	 					 
						<div class="form-group"> 

						    		 <div class="label label-primary">
														 	Estado Civil
									</div>
					
												{{-- {!! Form::text('estado_civil', null, ['class' => 'form-control']) !!} --}}
										@include('pacientes.formEstado')
						</div>
		

	</div>





	<div class="col-md-3">
		
						 @if($errors->has('direccion'))
       					 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('direccion') }}
					  		  </div>
				     		 @else
					   <div class="form-group">
					   @endif
				    		 <div class="label label-primary">
												 	Direccion
							</div>

		 	
		 							{!! Form::text('direccion', null, ['class' => 'form-control','placeholder'=>'Ingrese su direccion/domicilio']) !!}
 					  </div>
 		
	</div>





	<div class="col-md-3">
						 @if($errors->has('telefono'))
       					 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('telefono') }}
					  		  </div>
				     		 @else
		
		    		  <div class="form-group">
		    		  @endif
						    		 <div class="label label-primary">
														 	Telefono/Celular
									</div>
				 	
								 	<div class="input-group">
								 	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								 		{!! Form::text('telefono', null, ['class' => 'form-control','placeholder'=>'Número telefónico']) !!}
								 	</div>
 	
					  </div>
	


	</div>
</div>

      {{--   	  @if($errors->has('ci'))
       		 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('ci') }}
					  		  </div>
				     		 @else
				       		<div class="form-group">
				    		 @endif --}}
					
 



  

 		{{-- 	@if($errors->has('nombre'))
       		 <div class="form-group has-error">
	   		 <div class="help-block">
			{{ $errors->first('nombre') }}
	  		  </div>
     		 @else --}}
       		{{-- <div class="form-group">
    		 @endif --}}


 
			







        	 {{--  @if($errors->has('ap_paterno'))
       		 <div class="form-group has-error">
					   		 <div class="help-block">
							{{ $errors->first('ap_paterno') }}
					  		  </div>
				     		 @else
				       		<div class="form-group">
				    		 @endif --}}

				





			{{-- @if($errors->has('ap_materno'))
       		 <div class="form-group has-error">
			   		 <div class="help-block">
					{{ $errors->first('ap_materno') }}
			  		  </div>
		     		 @else
		       		<div class="form-group">
		    		 @endif --}}

		    		






			{{-- @if($errors->has('fecha_nac'))
       		 <div class="form-group has-error">
			   		 <div class="help-block">
					{{ $errors->first('fecha_nac') }}
			  		  </div>
		     		 @else
		       		<div class="form-group">
		    		 @endif --}}


		    		

			

	



				{{-- @if($errors->has('estado'))
       		 <div class="form-group has-error">
			   		 <div class="help-block">
					{{ $errors->first('estado') }}
			  		  </div>
		     		 @else
		       		<div class="form-group">
		    		 @endif --}}

		    		
		
	





	{{-- @if($errors->has('direccion'))
       <div class="form-group has-error">
			   		 <div class="help-block">
					{{ $errors->first('direccion') }}
			  		  </div>
		     		 @else
		       		<div class="form-group">
		    		 @endif --}}
		    		






{{-- @if($errors->has('telefono'))
       <div class="form-group has-error">
			   		 <div class="help-block">
					{{ $errors->first('telefono') }}
			  		  </div>
		     		 @else
		       		<div class="form-group">
		    		 @endif --}}

	

		

