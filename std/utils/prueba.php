<?php
	require_once("xmlstring_array_helper.php");
	try {  
			$parameters["identificacion"] = "0927343780";
			$parameters["matricula"] = "200912756";
			$x = new SoapClient("https://ws.espol.edu.ec/saac/wsSAAC.asmx?WSDL");
			$objRespuesta = $x->MateriasMallaAprobadas($parameters);
			$result = obj2array($objRespuesta);
			$datamat = ($result['MateriasMallaAprobadasResult']['any']);  
			$mat = xmlstr_to_array($datamat);
			print_r($mat['NewDataSet']);
			//return $mat;
		} catch (Exception $e) {  
			//echo $e->getMessage(); 
			return false;
		} 
?>