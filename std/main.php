<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>FLAT - Dashboard</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="css/plugins/pageguide/pageguide.css">
	<!-- chosen -->
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="css/plugins/select2/select2.css">
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
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- dataTables -->
	<script src="js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="js/plugins/datatable/TableTools.min.js"></script>
	<script src="js/plugins/datatable/ColReorder.min.js"></script>
	<script src="js/plugins/datatable/ColVis.min.js"></script>
	<script src="js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
	<!-- Flot -->
	<script src="js/plugins/flot/jquery.flot.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- PageGuide -->
	<script src="js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<script src="js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>

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
	<style>
		table th,td{
			text-align:center !important;
		}
	</style>

</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">VIRTUAL ADVISOR</a>
			<ul class='main-nav'>
				<li class='active'>
					<a href="main.php">
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="decision.php">
						<span>Decisi&oacute;n</span>
					</a>
				</li>
                                <li>
					<a href="calificacion.php">
						<span>Calificar Cursadas</span>
					</a>
				</li>
				<li>
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
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php session_start(); echo $_SESSION['datos']['NOMBRES']?> <img src="img/user2.png" alt=""></a>
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
						<h1>Dashboard</h1>
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
				<!--<div class="row-fluid">
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-bar-chart"></i>
									Audience Overview
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<div class="input-medium">
												<select name="category" class='chosen-select' data-nosearch="true">
													<option value="1">Visits</option>
													<option value="2">New Visits</option>
													<option value="3">Unique Visits</option>
													<option value="4">Pageviews</option>
												</select>
											</div>
										</div>
										<div class="right">
											8,195 <span><i class="icon-circle-arrow-up"></i></span>
										</div>
									</div>
									<div class="bottom">
										<div class="flot medium" id="flot-audience"></div>
									</div>
									<div class="bottom">
										<ul class="stats-overview">
											<li>
												<span class="name">
													Visits
												</span>
												<span class="value">
													11,251
												</span>
											</li>
											<li>
												<span class="name">
													Pages / Visit
												</span>
												<span class="value">
													8.31
												</span>
											</li>
											<li>
												<span class="name">
													Avg. Duration
												</span>
												<span class="value">
													00:06:41
												</span>
											</li>
											<li>
												<span class="name">
													% New Visits
												</span>
												<span class="value">
													67,35%
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="box box-color lightred box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-bar-chart"></i>
									HDD usage
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<div class="input-medium">
												<select name="category" class='chosen-select' data-nosearch="true">
													<option value="1">Today</option>
													<option value="2">Yesterday</option>
													<option value="3">Last week</option>
													<option value="4">Last month</option>
												</select>
											</div>
										</div>
										<div class="right">
											50% <span><i class="icon-circle-arrow-right"></i></span>
										</div>
									</div>
									<div class="bottom">
										<div class="flot medium" id="flot-hdd"></div>
									</div>
									<div class="bottom">
										<ul class="stats-overview">
											<li>
												<span class="name">
													Usage
												</span>
												<span class="value">
													50%
												</span>
											</li>
											<li>
												<span class="name">
													Usage % / User
												</span>
												<span class="value">
													0.031
												</span>
											</li>
											<li>
												<span class="name">
													Avg. Usage %
												</span>
												<span class="value">
													60%
												</span>
											</li>
											<li>
												<span class="name">
													Idle Usage %
												</span>
												<span class="value">
													12%
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-reorder"></i>
									Materias Aprobadas
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content" style="display: block;">
								<table class="table table-hover table-nomargin table-bordered dataTable-columnfilter dataTable">
									<thead>
										<tr class='thefilter'>
											<th>C&oacute;digo</th>
											<th>Materia</th>
											<th class='hidden-350'>T&eacute;rmino</th>
											<th class='hidden-1024'>Veces Tomada</th>
											<th class='hidden-480'>Promedio</th>
										</tr>
										<tr>
											<th>C&oacute;digo</th>
											<th>Materia</th>
											<th class='hidden-350'>T&eacute;rmino</th>
											<th class='hidden-1024'>Veces Tomada</th>
											<th class='hidden-480'>Promedio</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$materias = $_SESSION['materias'];
											foreach($materias as $mt){
												echo "<tr>";
												echo "<td>".$mt['CODMATERIA']."</td>";
												echo "<td>";
												echo $mt['NOMMATERIA'];
												echo "</td>";
												echo "<td class='hidden-350'>".$mt['ANIO']." - ".$mt['TERMINO']."</td>";
												echo "<td class='hidden-1024'>";
												if(isset($mt['VEZTOMADA'])) echo $mt['VEZTOMADA'];
												else echo "-";
												echo "</td>";
												echo "<td class='hidden-480'>";
												if(isset($mt['PROMEDIO'])) echo $mt['PROMEDIO'];
												else echo "-";
												echo "</td>";
												echo "</tr>";
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		</div>
		<div id="footer">
			<p>
				VIRTUAL ADVISOR - SISTEMAS DE TOMA DE DECISIONES <span class="font-grey-4">|</span> <a href="#">Contact</a> <span class="font-grey-4">|</span> <a href="#">Imprint</a> 
			</p>
			<a href="#" class="gototop"><i class="icon-arrow-up"></i></a>
		</div>
	</body>

	</html>

