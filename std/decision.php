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
	
	<title>FLAT - Decisi&oacute;n</title>
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
					<li>
						<a href="main.php">
							<span>Dashboard</span>
						</a>
					</li>
					<li class='active'>
						<a href="decision.php">
							<span>Decisi&oacute;n</span>
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
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php /*session_start();*/ echo $_SESSION['datos']['NOMBRES']?> <img src="img/user2.png" alt=""></a>
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
							<h1>Soporte a la decisi&oacute;n</h1>
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
							<div class="box">
								<div class="box-title">
									<h3>
										<i class="icon-reorder"></i>
										Cu&aacute;les materias deber&iacute;a tomar?
									</h3>
								</div>
								<div class="box box-color box-bordered lightred">
									<div class="box-title">
										<h3>
											<i class="icon-magic"></i>
											Par&aacute;metros para la toma de decisi&oacute;n
										</h3>
									</div>
									<div class="box-content nopadding">
										<form action="post.php" method="POST" class="form-horizontal form-wizard ui-formwizard" id="ss" novalidate="novalidate">
											<div class="step ui-formwizard-content" id="firstStep" style="display: block;">
												<ul class="wizard-steps steps-4">
													<li class="active">
														<div class="single-step">
															<span class="title">
																1</span>
															<span class="circle">
																<span class="active"></span>
															</span>
															<span class="description">
																Basic information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																2</span>
															<span class="circle">
															</span>
															<span class="description">
																Advanced information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																3</span>
															<span class="circle">
															</span>
															<span class="description">
																Additional information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																4</span>
															<span class="circle">
															</span>
															<span class="description">
																Check again
															</span>
														</div>
													</li>
												</ul>
												<div class="step-forms">
													<div class="control-group success">
														<label for="firstname" class="control-label">First name</label>
														<div class="controls">
															<input type="text" name="firstname" id="firstname" class="input-xlarge ui-wizard-content valid" data-rule-required="true">
														<span for="firstname" class="help-block error valid" style="display: none;"></span></div>
													</div>
													<div class="control-group success">
														<label for="anotherelem" class="control-label">Last name</label>
														<div class="controls">
															<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content valid" data-rule-required="true">
														<span for="anotherelem" class="help-block error valid" style="display: none;"></span></div>
													</div>
													<div class="control-group success">
														<label for="additionalfield" class="control-label">Additional information</label>
														<div class="controls">
															<input type="text" name="additionalfield" id="additionalfield" class="input-xlarge ui-wizard-content valid" data-rule-required="true" data-rule-minlength="10">
														<span for="additionalfield" class="help-block error valid" style="display: none;"></span></div>
													</div>
												</div>
											</div>
											<div class="step ui-formwizard-content" id="secondStep" style="display: none;">
												<ul class="wizard-steps steps-4">
													<li>
														<div class="single-step">
															<span class="title">
																1</span>
															<span class="circle">
																
															</span>
															<span class="description">
																Basic information
															</span>
														</div>
													</li>
													<li class="active">
														<div class="single-step">
															<span class="title">
																2</span>
															<span class="circle">
																<span class="active"></span>
															</span>
															<span class="description">
																Advanced information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																3</span>
															<span class="circle">
															</span>
															<span class="description">
																Additional information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																4</span>
															<span class="circle">
															</span>
															<span class="description">
																Check again
															</span>
														</div>
													</li>
												</ul>
												<div class="control-group success">
													<label for="text" class="control-label">Gender</label>
													<div class="controls">
														<select name="gend" id="gend" data-rule-required="true" class="ui-wizard-content valid" disabled="disabled">
															<option value="">-- Chose one --</option>
															<option value="1">Male</option>
															<option value="2">Female</option>
														</select>
													<span for="gend" class="help-block error valid" style="display: none;"></span></div>
												</div>
												<div class="control-group success">
													<label for="text" class="control-label">Accept policy</label>
													<div class="controls">
														<label class="checkbox"><input type="checkbox" name="policy" value="agree" data-rule-required="true" class="ui-wizard-content valid" disabled="disabled"> I agree the policy.</label>
													<span for="policy" class="help-block error valid" style="display: none;"></span></div>
												</div>
											</div>
											<div class="step ui-formwizard-content" id="thirdStep" style="display: none;">
												<ul class="wizard-steps steps-4">
													<li>
														<div class="single-step">
															<span class="title">
																1</span>
															<span class="circle">
																
															</span>
															<span class="description">
																Basic information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																2</span>
															<span class="circle">
																
															</span>
															<span class="description">
																Advanced information
															</span>
														</div>
													</li>
													<li class="active">
														<div class="single-step">
															<span class="title">
																3</span>
															<span class="circle">
																<span class="active"></span>
															</span>
															<span class="description">
																Additional information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																4</span>
															<span class="circle">
															</span>
															<span class="description">
																Check again
															</span>
														</div>
													</li>
												</ul>
												<div class="control-group">
													<label for="text" class="control-label">Additional information</label>
													<div class="controls">
														<textarea name="textare" id="tt333" class="span12 ui-wizard-content valid" rows="7" placeholder="You can provide additional information in here..." disabled="disabled"></textarea>
													</div>
												</div>
											</div>
											<div class="step ui-formwizard-content" id="fourthstep" style="display: none;">
												<ul class="wizard-steps steps-4">
													<li>
														<div class="single-step">
															<span class="title">
																1</span>
															<span class="circle">
																
															</span>
															<span class="description">
																Basic information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																2</span>
															<span class="circle">
																
															</span>
															<span class="description">
																Advanced information
															</span>
														</div>
													</li>
													<li>
														<div class="single-step">
															<span class="title">
																3</span>
															<span class="circle">
															</span>
															<span class="description">
																Additional information
															</span>
														</div>
													</li>
													<li class="active">
														<div class="single-step">
															<span class="title">
																4</span>
															<span class="circle">
																<span class="active"></span>
															</span>
															<span class="description">
																Check again
															</span>
														</div>
													</li>
												</ul>
												<div class="control-group">
													<label for="text" class="control-label">Check again</label>
													<div class="controls">
														<label class="checkbox"><input type="checkbox" name="policy" value="agree" data-rule-required="true" class="ui-wizard-content valid" disabled="disabled"> Everything is ok. Submit</label>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<input type="reset" class="btn ui-wizard-content ui-formwizard-button" value="Back" id="back" disabled="disabled">
												<input type="submit" class="btn btn-primary ui-wizard-content ui-formwizard-button" value="Next" id="next">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-reorder"></i>
										Resultado
									</h3>
								</div>
								<div class="box-content" style="display: block;" id="resultado">
									
                                                                    <table class="table table-hover table-nomargin table-bordered dataTable-columnfilter dataTable">
                                                                        <thead>
                                                                            <tr class='thefilter'>
                                                                                <th>Codigo</th>
                                                                                <th>Nombre</th>
                                                                                <th>Paralelo</th>
                                                                                <th>Profesor</th>
                                                                                <th>Nota Profesor</th>
                                                                                <th>Creditos</th>
                                                                                <th>Tipo Credito</th>
                                                                                <th>Indicador Dificultad</th>
                                                                            </tr>
<!--                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Nombre</th>
                                                                                <th>Paralelo</th>
                                                                                <th>Profesor</th>
                                                                                <th>Nota Profesor</th>
                                                                                <th>Creditos</th>
                                                                                <th>Tipo Credito</th>
                                                                                <th>Indicador Dificultad</th>
                                                                            </tr>-->
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                                include "./utils/difficultIndicator.php";
                                                                                include "./utils/processInfo.php";
                                                                                include "./utils/cenacadData.php";                                                                            

                                                                                /******************************************************************
                                                                                *      LLENAR ARREGLO CON LAS MATERIAS DISPONIBLES ACTIVAS X EST. *
                                                                                *******************************************************************/        
                                                                                $matricula = $datos_usuario['COD_ESTUDIANTE'];
                                                                                try {
                                                                                    $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?wsdl';
                                                                                    $client = new SOAPClient($wsdl_url);
                                                                                    $params = array(
                                                                                        'matricula' => "$matricula"
                                                                                    );
                                                                                    $return = $client->MateriasDisponiblesEstudianteActivas($params);
                                                                                    $xml = simplexml_load_string($return->MateriasDisponiblesEstudianteActivasResult->any);

                                                                                    $materiasDisponibles = array();

                                                                                    foreach($xml->NewDataSet->V_MATERIAS_DISPONIBLES as $materiaDisponible){
                                                                                        array_push($materiasDisponibles, $materiaDisponible);
                                                                                    }
                                                                                } catch (Exception $e) {
                                                                                    echo "Exception occured: " . $e;
                                                                                }
                                                                                /*******************************************************************
                                                                                *      LLENAR ARREGLOS DE:
                                                                                *          - Materias por tomar, CODIGOMATERIA, ej: string 'FIEC05058      ' 
                                                                                *          - Materias por profesor, COD_MATERIA_ACAD ej:  string 'FIEC00075 ' & IDCURSO
                                                                                *          - Horarios de clases y examenes, IDCURSO
                                                                                *******************************************************************/
                                                                                try {
                                                                                    $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?wsdl';
                                                                                    $client = new SOAPClient($wsdl_url);
                                                                                    $params = array(
                                                                                        'matricula' => "$matricula"
                                                                                    );
                                                                                    $return = $client->MateriasPorTomarEstudiante($params);
                                                                        //            var_dump($return->MateriasPorTomarEstudianteResult);

                                                                                    $xml = simplexml_load_string($return->MateriasPorTomarEstudianteResult->any);


                                                                                    $materiasPorTomar = array();
                                                                                    foreach ($xml->NewDataSet->V_MATERIAS_X_TOMAR as $materiaPorTomar){
                                                                                        array_push($materiasPorTomar, $materiaPorTomar);
                                                                                    }
                                                                                    $materiasPorProfesor = array();
                                                                                    foreach ($xml->NewDataSet->V_MATERIAS_X_PROFESOR as $materiaPorProfesor){
                                                                                        array_push($materiasPorProfesor, $materiaPorProfesor);
                                                                                    }
                                                                                    $materiasHorarioClases = array();
                                                                                    foreach ($xml->NewDataSet->V_HORARIO_CLASES as $materiaHorarioClases){
                                                                                        array_push($materiasHorarioClases, $materiaHorarioClases);
                                                                                    }
                                                                                } catch (Exception $e) {
                                                                                    echo "Exception occured: " . $e;
                                                                                }
                                                                                foreach ($materiasDisponibles as $materiaDisp){
                                                                                    getCoursesByCodMateria($materiasPorProfesor,$materiaDisp->COD_MATERIA_ACAD, $materiaDisp);                        
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
				FLAT - Responsive Admin Template <span class="font-grey-4">|</span> <a href="#">Contact</a> <span class="font-grey-4">|</span> <a href="#">Imprint</a> 
			</p>
			<a href="#" class="gototop"><i class="icon-arrow-up"></i></a>
		</div>
		
	</body>

	</html>

