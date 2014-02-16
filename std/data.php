<?php
header('Content-Type: application/x-javascript; charset=UTF-8');

require_once("xmlstring_array_helper.php");

simpleWS();

function simpleWS(){
	if(isset($_GET["matricula"])){
		$matr = $_GET["matricula"];
		if($matr != ""){
			$parametros = array(); 
			$materias = array();
			$resultado = array();
			$colores = array("rojo","plomo","azul","celeste","amarillo","naranja","verde","cafe");
			$i=0;
			try{
				$parametros['matricula'] = $matr; 
				$WebService="https://www.academico.espol.edu.ec/services/wsSAAC.asmx?wsdl";       
				$WS = new SoapClient($WebService);
				$result = $WS->HorarioClasesScheluder($parametros);     
				$result = obj2array($result);
				$datamat = ($result['HorarioClasesScheluderResult']['any']);  
				$mat = xmlstr_to_array($datamat);
				//print_r($mat);
				//echo "</br>";
				$nombre = getNombre($matr);
				if(! empty ($mat)){
					
					foreach($mat['NewDataSet']['V_MAT_REGISTRADAS'] as $ar){
						//echo $ar['NOMBREMATERIA']."-->".$ar['IDCURSO']."</br>";
						$materias[$ar['IDCURSO']] = array("nombre" => $ar['NOMBREMATERIA'],"profesor" => $ar['PROFESOR'], "color" => $colores[$i],"codigo" => $ar['CODIGOMATERIA'] );
						$i++;
					}
					$i=0;
					foreach($mat['NewDataSet']['V_HORARIO_CLASES'] as $ar){
						//print_r($ar);
						$resultado[$i]['nombre'] = $materias[$ar['IDCURSO']]['nombre'];
						$resultado[$i]['profesor'] = $materias[$ar['IDCURSO']]['profesor'];
						$resultado[$i]['codigo'] = $materias[$ar['IDCURSO']]['codigo'];
						$resultado[$i]['dia'] = $ar['DIA'];
						$resultado[$i]['inicio'] = $ar['HORAINICIO'];
						$resultado[$i]['fin'] = $ar['HORAFIN'];
						$resultado[$i]['aula'] = $ar['AULA'];
						$resultado[$i]['color'] = $materias[$ar['IDCURSO']]['color'];
						$resultado[$i]['est'] = $nombre;
						//echo "</br>";
						$i++;
					}
				}
				if(isset($_GET['callback'])){ // Si es una petición cross-domain
				   echo $_GET['callback'].'('.json_encode($resultado).')';
				}
				else // Si es una normal, respondemos de forma normal
				   echo json_encode($resultado);
			}catch(Exception $e){
				$data['msj'] = "Error en el web service";
			}
		}
	}
 }
 function getNombre($matri){
	$parametros['matricula'] = $matri; 
	$WebService="https://www.academico.espol.edu.ec/services/wsSAAC.asmx?wsdl";       
	$WS = new SoapClient($WebService);
	$result = $WS->InformacionAcademicaEstudianteGet($parametros);     
	$result = obj2array($result);        
	$datamat = ($result['InformacionAcademicaEstudianteGetResult']['any']);  
	$mat = xmlstr_to_array($datamat);
	$nom = explode(' ',$mat['NewDataSet']['Table']['NOMBRES']);
	$ape = explode(' ',$mat['NewDataSet']['Table']['APELLIDOS']);
	$nombre = $nom[0]." ".$ape[0];
	return $nombre;
	//print_r($mat['NewDataSet']['Table']);
}
?>
 