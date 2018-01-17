<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Proyecto Minkay</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<link rel="stylesheet" type="text/css" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
	<link rel="stylesheet" type="text/css" href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'>
	<link rel="stylesheet" type="text/css" href="assets/css/usuario.css" >
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" > 
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')  }}">
    <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}" ></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script> 

   <script type="text/javascript" src="{{ url('js/bootstrap.js') }}" ></script>


	<!--<script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>
	-->
	<script type="text/javascript" src='https://cdn.datatables.net/1.10.5/js/
	jquery.dataTables.min.js'></script>
	<script type="text/javascript" src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
	<script type="text/javascript" src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>


</head>

<body>

	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">

				<a class="navbar-brand" href="#"><img src="assets/img/logo.png" style="width:60%"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span> 
							<strong>Nombre</strong>
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="navbar-login">
									<div class="row">
										<div class="col-lg-4">
											<p class="text-center">
												<span class="glyphicon glyphicon-user fa-4x"></span>
											</p>
										</div>
										<div class="col-lg-8">
											<p class="text-left"><strong>Nombre Apellido</strong></p>
											<p class="text-left small">Nombre de usuario</p>

										</div>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="navbar-login navbar-login-session">
									<div class="row">
										<div class="col-lg-12">
											<p>
												<a href="#" class="btn btn-info btn-block"><strong> Inicio </strong></a>
												<a href="#" class="btn btn-danger btn-block"><strong> Cerrar Sesión </strong></a>

											</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<style type="text/css">
	body { 
		font-size: 140%; 
	}

	h2 {
		text-align: center;
		padding: 20px 0;
	}

	table caption {
		padding: .5em 0;
	}

	table.dataTable th,
	table.dataTable td {
		white-space: nowrap;
	}

	.p {
		text-align: center;
		padding-top: 140px;
		font-size: 14px;
	}

	th { font-size: 12px; }
	td { font-size: 11px; }
</style>

<div class="container">
	<div class="row">
		<div class="col-xs-12">

			<table cellspacing="0" id="example" class="display table table-bordered table-hover dt-responsive" >
				<caption class="text-center">  </caption>
				<thead>
					<tr class="dropdown">
						<!--<th></th>-->
						<th> Campo 1 </th>
						<th> Campo 2</th>
						<!--<th>Est. Vehículo</th>
						<th>Est. Mantenimiento</th>
						<th>KM Anterior </th>
						<th>KM Actual </th>
						<th>KM Acumulado </th>-->
					</tr>
				</thead>
				<tbody>
					
				</tbody>

			</table>
		</div>
	</div>
</div>




<script>
	$(document).ready(function(){


		$('#example tbody').empty();
		
		$('table').DataTable({


			"ajax": {
				"url": "/getUserJSON",
				"dataSrc": ""
			},
			"columns": [
			{ "data": "nombres" , "width": "20%" },	
			{ 
				"data": "apellido"
			}
			],


			language: {
				"decimal": "",
				"emptyTable": "No hay información",
				"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
				"infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
				"infoFiltered": "(Filtrado de _MAX_ total entradas)",
				"infoPostFix": "",
				"thousands": ",",
				"lengthMenu": "Mostrar _MENU_ Entradas",
				"loadingRecords": "Cargando...",
				"processing": "Procesando...",
				"search": "Buscar:",
				"zeroRecords": "No se encuentra vehículo alguno con los parámetros que ha indicado",
				"paginate": {
					"first": "Primero",
					"last": "Ultimo",
					"next": "Siguiente",
					"previous": "Anterior"
				}    
			}
			


		} );

	});




</script>

</body>
</html>
