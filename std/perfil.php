<?php 
	session_start();
	if(!isset($_SESSION['datos']))
		header('Location: index.php');
	$datos_usuario = $_SESSION['datos'];
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>FLAT - Perfil</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- Tagsinput -->
	<link rel="stylesheet" href="css/plugins/tagsinput/jquery.tagsinput.css">
	<!-- select2 -->
	<link rel="stylesheet" href="css/plugins/select2/select2.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- select2 -->
	<script src="js/plugins/select2/select2.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>
	<!-- TagsInput -->
	<script src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">VIRTUAL ADVISOR</a>
			<ul class='main-nav'>
				<li>
					<a href="main.php">
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="decision.php">
						<span>Decisi&oacute;n</span>
					</a>
				</li>
				<li class='active'>
					<a href="perfil.php">
						<span>Perfil</span>
					</a>
				</li>
			</ul>
		<div class="user">
				<ul class="icon-nav">
					<li class='dropdown colo'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-tint"></i></a>
						<ul class="dropdown-menu pull-right theme-colors">
							<li class="subtitle">
								Predefined colors
							</li>
							<li>
								<span class='red'></span>
								<span class='orange'></span>
								<span class='green'></span>
								<span class="brown"></span>
								<span class="blue"></span>
								<span class='lime'></span>
								<span class="teal"></span>
								<span class="purple"></span>
								<span class="pink"></span>
								<span class="magenta"></span>
								<span class="grey"></span>
								<span class="darkblue"></span>
								<span class="lightred"></span>
								<span class="lightgrey"></span>
								<span class="satblue"></span>
								<span class="satgreen"></span>
							</li>
						</ul>
					</li>
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo $datos_usuario['NOMBRES']?> <img src="img/user2.png" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="utils/funciones.php?cod=1">Cerrar Sesi&oacute;n</a>
						</li>
					</ul>
				</div>
			</div>
	</div>
</div>
<div class="container-fluid" id="content">
	<div id="main" style="margin:0 auto; width:90%;">
		<div class="container-fluid">
			<div class="page-header">
				<div class="pull-left">
					<h1>Perfil</h1>
				</div>
				<div class="pull-right">
						<ul class="stats">
							<li class='satgreen' style="display:none;">
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">$324,12</span>
									<span>T&eacute;rmino Actual</span>
								</div>
							</li>
							<li class='satgreen'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul>
					</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-color box-bordered">
						<div class="box-title">
							<h3>
								<i class="icon-user"></i>
								Perfil de Usuario
							</h3>
						</div>
						<div class="box-content nopadding">
							<ul class="tabs tabs-inline tabs-top">
								<li class='active'>
									<a href="#profile" data-toggle='tab'><i class="icon-user"></i> Datos Personales</a>
								</li>
								<li>
									<a href="#notifications" data-toggle='tab'><i class="icon-bullhorn"></i> Datos Acad&eacute;micos</a>
								</li>
								<li>
									<a href="#contactos" data-toggle='tab'><i class="icon-mobile-phone"></i> Datos de Contacto</a>
								</li>
							</ul>
							<div class="tab-content padding tab-content-inline tab-content-bottom">
								<div class="tab-pane active" id="profile">
									<form action="#" class="form-horizontal">
										<div class="row-fluid">
											<div class="span2" style="text-align:center;">
												<img src="img/user.jpg" style="width: 127px; height: 200px;"/>
											</div>
											<div class="span10">
												<div class="control-group">
													<label for="name" class="control-label right">Nombres:</label>
													<div class="controls">
														<input type="text" name="name" class='input-large' value="<?php echo $datos_usuario['NOMBRES']?>" disabled>
													</div>
												</div>
												<div class="control-group">
													<label for="name" class="control-label right">Apellidos:</label>
													<div class="controls">
														<input type="text" name="apellido" class='input-large' value="<?php echo $datos_usuario['APELLIDOS']?>" disabled>
													</div>
												</div>
												<div class="control-group">
													<label for="name" class="control-label right">C&eacute;dula:</label>
													<div class="controls">
														<input type="text" name="cedula" class='input-large' value="<?php echo $datos_usuario['IDENTIFICACION']?>" disabled>
													</div>
												</div>
												<div class="control-group">
													<label for="name" class="control-label right">Matr&iacute;cula:</label>
													<div class="controls">
														<input type="text" name="matricula" class='input-large' value="<?php echo $datos_usuario['COD_ESTUDIANTE']?>" disabled>
													</div>
												</div>
												<div class="control-group">
													<label for="name" class="control-label right">Direcci&oacute;n:</label>
													<div class="controls">
														<input type="text" name="direccion" class='input-block-level' style="width:550px;" value="<?php echo $datos_usuario['DIRECCION']?>" disabled>
													</div>
												</div>
												<div class="control-group">
													<label for="name" class="control-label right">Fecha Nacimiento:</label>
													<div class="controls">
														<input type="text" name="fecha_nac" class='input-large' value="<?php echo explode("T",$datos_usuario['FECHA_NACIM'])[0]?>" disabled>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane" id="notifications">
									<form action="#" class="form-horizontal">
										<div class="span2" style="text-align:center;">
											<img src="img/academic.jpg" style="width: 232px; height: 217px;"/>
										</div>
										<div class="span10">
											<div class="control-group">
												<label for="name" class="control-label right">Unidad Acad&eacute;mica:</label>
												<div class="controls">
													<input type="text" name="unidad" class='input-large' value="<?php echo $datos_usuario['COD_UNIDAD']?>" disabled>
												</div>
											</div>
											<div class="control-group">
												<label for="name" class="control-label right">Carrera:</label>
												<div class="controls">
													<input type="text" name="carrera" class='input-xlarge' value="<?php echo $datos_usuario['CARRERA']?>" disabled>
												</div>
											</div>
											<div class="control-group">
												<label for="name" class="control-label right">Carrera Completa:</label>
												<div class="controls">
													<input type="text" name="carrera" class='input-block-level' style="width:550px;" value="<?php echo $datos_usuario['ESPECIALIZACION']?>" disabled>
												</div>
											</div>
											<div class="control-group">
												<label for="name" class="control-label right">Promedio:</label>
												<div class="controls">
													<input type="text" name="promedio" class='input-large' value="<?php echo $datos_usuario['PROMEDIOGENERAL']?>" disabled>
												</div>
											</div>
											<div class="control-group">
												<label for="name" class="control-label right">Materias Aprobadas:</label>
												<div class="controls">
													<input type="text" name="mat_aprob" class='input-large' value="<?php echo $datos_usuario['NUMAPROBADAS']?>" disabled>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane" id="contactos">
									<form action="#" class="form-horizontal">
										<div class="span2" style="text-align:center;">
											<img src="img/contacto.jpg" style="width: 200px; height: 175px;"/>
										</div>
										<div class="span10">
											<div class="control-group">
												<label for="name" class="control-label right">Correo:</label>
												<div class="controls">
													<input type="text" name="correo" class='input-large' value="<?php echo $datos_usuario['EMAIL']?>" disabled>
												</div>
											</div>
											<div class="control-group">
												<label for="name" class="control-label right">Tel&eacute;fono:</label>
												<div class="controls">
													<input type="text" name="telefono" class='input-large' value="<?php echo $datos_usuario['TELEFONO']?>" disabled>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></div>
	<div id="footer">
			<p>
				FLAT - Responsive Admin Template <span class="font-grey-4">|</span> <a href="#">Contact</a> <span class="font-grey-4">|</span> <a href="#">Imprint</a> 
			</p>
			<a href="#" class="gototop"><i class="icon-arrow-up"></i></a>
		</div>
</body>

</html>

