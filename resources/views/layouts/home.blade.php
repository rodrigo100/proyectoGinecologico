@extends('layouts.admin')
@section('contenido')

	


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{!! asset('img/doctor.png') !!}" alt="Doctor" width="460" height="345">

        <div class="carousel-caption">
          
          
        
  <font face="raro, courier" SIZE=2 COLOR="red">Ginecólogo y Abstetra</font><br>
    <FONT FACE="impact" SIZE=4 COLOR="red">
 Dr. Juan Carlos Molina</FONT><br>
          
          
        </div>
      </div>

      <div class="item">
        <img src="{!! asset('img/centro.jpg') !!}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          
          	<font face="raro, courier" SIZE=2 COLOR="red">Amplia sala de espera, confortable para los pacientes y familiares</font><br>
          <FONT FACE="impact" SIZE=4 COLOR="red">
 Sala de espera...</FONT>
         
        </div>
      </div>
    
      <div class="item">
        <img src="{!! asset('img/otro1.png') !!}" alt="logo" width="460" height="345">
        <div class="carousel-caption">
       
          	<font face="raro, courier" SIZE=2 COLOR="red">Personas con responsabilidad y comprometidos con su salud...</font><br>
          <FONT FACE="impact" SIZE=4 COLOR="red">
             Personal calificado</FONT>
         
          </div>
      </div>

      <div class="item">
        <img src="{!! asset('img/consul.png') !!}" alt="consul" width="460" height="345">
        <div class="carousel-caption">
        
          	<font face="raro, courier" SIZE=2 COLOR="red">Contamos con los equipos de última tecnologia</font><br>
          <FONT FACE="impact" SIZE=4 COLOR="red">
             Tecnologia</FONT>
        
      </div>
      </div>

       <div class="item">
        <img src="{!! asset('img/otro2.png') !!}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
     
          	<font face="raro, courier" SIZE=2 COLOR="red">Ven y asegura tu salud con nostros</font><br> 
          <FONT FACE="impact" SIZE=4 COLOR="red">
             Tú Salud es primero..</FONT>
          
          </div>
      </div>

       <div class="item">
        <img src="{!! asset('img/logo.png') !!}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
      
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>







@endsection