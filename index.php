<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Recorrer un rango de Fechas con PHP :: WebDeveloper Urian Viera</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <style>
  h4{
      padding: 0px !important;
      color: crimson;
      margin-bottom: 35px;
  }
  </style>
  
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="background-color: #563d7c !important;">
    <span class="navbar-brand">
        <img src="img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
        Web Developer Urian Viera
    </span>
</nav>

<div class="container mt-5 p-5">

<h4 class="text-center">Recorrer un rango de Fechas con PHP</h4>
<hr>


<div class="row text-center" id="capa">
  <div class="col-md-6"> 
    <strong>Registrar Empleado</strong>
  </div>
  <div class="col-md-6"> 
    <strong>Lista de Empleados</strong>
  </div>
</div>

<?php
include('config.php');
$empleados      = ("SELECT * FROM empleados ORDER BY id DESC ");
$resulEmpleado  = mysqli_query($con, $empleados);
?>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">
        <div class="col-sm-6">
        <form method="post" name="formRegistraEmpleado" id="formRegistraEmpleado">
              <div class="row">
                <div class="col-md-12">
                    <label for="Nombre" class="form-label">Nombre del Empleado</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required='true' autofocus>
                </div>
                <div class="col mt-2">
                    <label for="fechaInicio" class="form-label">Fecah Inicio</label>
                    <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" required='true'>
                </div>
                <div class="col mt-2">
                    <label for="fechaFin" class="form-label">Fecha Fin</label>
                    <input type="date" class="form-control" name="fechaFin" id="fechaFin" required='true'>
                </div>
              </div>
                <div class="row justify-content-start text-center mt-5">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" id="btnEnviar">
                            <span class="spinner-border spinner-border-sm mr-2"></span>
                            Registrar Empleado
                        </button>
                    </div>
                </div>
          </form>
          </div>  
         

          <div class="col-sm-6">
              <div class="row">
                <div class="col-md-12 p-2">
                    <div class="table-responsive" id="respuesta">
                        <?php include('empleados.php'); ?>
                    </div>
                </div>
              </div>
          </div>
          </div>
      </div>
  </div>
</div>


</div>


<script  src="https://code.jquery.com/jquery-3.5.1.js"  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="  crossorigin="anonymous"></script>
  <script>
	$(document).ready(function() {
      $(".spinner-border").hide(); //Ocultando el cargando
	  
      $('#btnEnviar').click(function(e){
        e.preventDefault();
		var url = "DataEmpleado.php"; 

            $('#btnEnviar').removeClass('btn-primary');
            $('#btnEnviar').addClass('btn-success');
            $("#btnEnviar").attr('disabled',true); //Desabilitar el boton
            $(".spinner-border").show();   //Mostrar Cargando   

		$.ajax({                        
		   type: "POST",                 
		   url: url,                    
		   data: $("#formRegistraEmpleado").serialize(),
		   success: function(data)            
		   {
			 $('#respuesta').html(data);  
             $(".spinner-border").hide(); 
             $("#btnEnviar").attr('disabled',false);
             $('#btnEnviar').removeClass('btn-success');
             $('#btnEnviar').addClass('btn-primary');
             $("#btnEnviar").text("Registrar Empleado");      
		   }
		 });
	  });

	});
	</script>
</body>
</html>