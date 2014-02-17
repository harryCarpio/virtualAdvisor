<?php
	require_once("xmlstring_array_helper.php");
	session_start();
	$matricula = 0;
	if(isset($_GET['cod'])){
		switch($_GET['cod']){
			case '0':
				if(isset($_POST['unm'])||isset($_POST['upw'])){
					if(getInfoUsuario($_POST['unm'],$_POST['upw'])){
						getMateriasAprobadas();
						header('Location: ../main.php');
					}else
						header('Location: ../index.php?cod=0');
				}
				else
					header('Location: ../index.php');
				break;
			case '1':
				session_destroy();
				header('Location: ../index.php');
				break;
			case '3';
				$matricula = "200912756";
				getMateriasAprobadas();
				break;
			default:
				header('Location: ../index.php');
				break;
		}
	}
	else
		header('Location: ../index.php');
	function getInfoUsuario($ced, $matr){
		global $matricula;
		try {  
			$parameters["identificacion"] = $ced;
			$parameters["matricula"] = $matr;
			$x = new SoapClient("https://ws.espol.edu.ec/saac/wsSAAC.asmx?WSDL");
			$objRespuesta = $x->InformacionAcademicaEstudianteGet($parameters);
			$result = obj2array($objRespuesta);
			if(empty($result))
				return false;
			$datamat = ($result['InformacionAcademicaEstudianteGetResult']['any']);  
			$mat = xmlstr_to_array($datamat);
			$_SESSION['datos'] = $mat['NewDataSet']['Table'];
			$matricula = $mat['NewDataSet']['Table']['COD_ESTUDIANTE'];
			//print_r($mat['NewDataSet']);
			return true;
		} catch (Exception $e) {  
			//echo $e->getMessage(); 
		} 
	}
	function getMateriasAprobadas(){
		global $matricula;
		try {  
			$parameters["matricula"] = $matricula;
			$x = new SoapClient("https://ws.espol.edu.ec/saac/wsSAAC.asmx?WSDL");
			$objRespuesta = $x->MateriasMallaAprobadas($parameters);
			$result = obj2array($objRespuesta);
			$datamat = ($result['MateriasMallaAprobadasResult']['any']);  
			$mat = xmlstr_to_array($datamat);
			$_SESSION['materias'] = $mat['NewDataSet']['V_MATERIAS_ACREDITADAS'];
			//print_r($mat);
		} catch (Exception $e) {  
			//echo $e->getMessage(); 
		}
	}
        
        
?>