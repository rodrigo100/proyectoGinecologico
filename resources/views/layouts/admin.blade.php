<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consultorio ginecologico</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{!!asset('css/bootstrap.min.css')!!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!!asset('css/font-awesome.css')!!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!!asset('css/AdminLTE.min.css')!!}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!!asset('css/_all-skins.min.css')!!}">
    <link rel="apple-touch-icon" href="{!!asset('img/logomin.png')!!}">
    <link rel="shortcut icon" href="{!!asset('img/logomin.png')!!}">

    <link rel="stylesheet" href="{{asset('datepicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datepicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datepicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></span>
          <!-- logo for regular state and mobile devices -->
         {{--  <span class="logo-lg"> <img src="{!! asset('img/logox.png') !!}"></span> --}}
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
              {{--   <a href="#" class="dropdown-toggle" data-toggle="dropdown"> --}}
                @if(!Auth::check())

                     <li><a href="{{ route('usuarios.login') }}">Iniciar sesión</a></li>
                @else
                 <li><a href="{{ route('usuarios.logout') }}">Cerrar session</a></li>
                <li><a href="#" title=""><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->username }}&nbsp;</a>
                </li>
             
                @endif
                 
            {{--     </a> --}}
               {{--  <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul> --}}
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          {{--   <li class="header"></li> --}}
      @if(Auth::check())   
            <li class="treeview">
              <a href="paciente">
                <i class="fa fa-user"></i>
                <span>Pacientes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/paciente') }}"><i class="fa fa-th"></i> Lista de pacientes</a></li>
                <li><a href="{{ url('/gestion') }}"><i class="fa fa-pencil"></i>Gestionar pacientes</a></li>
              </ul>
            </li>
       

             <li class="treeview">
              <a href="{{ url('/reporte') }}">
                <i class="fa fa-file"></i> <span>Reporte</span>
              
              </a>
               <ul class="treeview-menu">
                <li><a href="{{ route('pdfhoy.pdfhoy') }}"><i class="fa fa-check"></i>Fecha actual</a></li>
                <li><a href="{{ url('/reporte') }}"><i class="fa fa-info"></i>Buscar por fecha</a></li>
              </ul>
            </li>
            
          @else  
          @endif           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle"></i> <span>Razon de ser</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/mision') }}"><i class="fa fa-list"></i> Misión y Visión</a></li>
                
              </ul>
              {{--  <ul class="treeview-menu">
                <li><a href="vision"><i class="fa fa-check"></i> Vision</a></li>
                
              </ul> --}}
            </li>
            
            <li>
              <a href="{{ url('acerca') }}">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-black">IT</small>
              </a>
            </li>
                 
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box center-block">
                <div class="box-header with-border ">
                  <h3 class="box-title alert alert-success">Consultorio médico Ginecologico - Dr. Juan Carlos Molina</h3>

                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                         
                             

                                    @yield('contenido')

                                   

                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="#">IncanatoIT</a>.</strong> All rights reserved.
        
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{!!asset('js/jQuery-2.1.4.min.js')!!}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{!!asset('js/bootstrap.min.js')!!}"></script>
    <!-- AdminLTE App -->
    <script src="{!!asset('js/app.min.js')!!}""></script>
    <script src="{!! asset('js/moment.min.js') !!}"></script>

     <script src="{{asset('datepicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
  



  @yield('script')





  

<script type="text/javascript">
 
 $('.fecha').datepicker({
    format: "yyyy-mm-dd",
    language: "es",
    autoclose: true
});



  
$('.fecha_nac').datepicker({
    format: "yyyy-mm-dd",
    language: "es",
    autoclose: true
});

$('.buscar').datepicker({
    format: "yyyy-mm-dd",
    language: "es",
    autoclose: true
});


 function mi_funcion()

    {

      $('.view').attr("disabled", false);
    }




  </script>
  



    
  </body>
</html>
