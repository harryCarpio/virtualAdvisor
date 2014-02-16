<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>FLAT - Login</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- icheck -->
	<link rel="stylesheet" href="css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>
	<!-- icheck -->
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/eakroko.js"></script>

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

<body class='login'>
	<div class="wrapper">
		<h1><a href="index.php"><img src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49">STD - 2014</a></h1>
		<div class="login-body">
			<h2>INGRESO</h2>
			<div>
				<p style="text-align:center; padding: 5px;">Ingrese n&uacute;mero de c&eacute;dula o matr&iacute;cula</p>
			</div>
			<form action="utils/funciones.php?cod=0" method='POST' class='form-validate' id="test">
				<div class="control-group">
					<div class="email controls">
						<input type="text" name='unm' placeholder="Ingrese C&eacute;dula" class='input-block-level'>
					</div>
				</div>
				<div class="control-group">
					<div class="pw controls">
						<input type="text" name="upw" placeholder="Ingrese Matr&iacute;cula" class='input-block-level'>
					</div>
				</div>
				<p id="error" style="display:<?php if(isset($_GET['cod'])){if($_GET['cod']==0) echo "";}else echo "none";?>; color:rgb(255,0,0); text-align:center; padding:5px;">La c&eacute;dula o matr&iacute;cula no corresponden a alg&uacute;n usuario de ESPOL</p>
				<div class="submit">
					<input type="submit" value="Ingresar" class='btn btn-primary'>
				</div>
			</form>
			<p>&nbsp;</p>
		</div>
	</div>
</body>

</html>
