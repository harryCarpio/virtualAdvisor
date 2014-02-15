<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?wsdl';
        $matricula = $_POST["matriculaIn"];

//        try {
//            $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?wsdl';
//            $client = new SOAPClient($wsdl_url);
//            $params = array(
//                'matricula' => "$matricula"
//            );
//            $return = $client->MateriasMallaAprobadas($params);
//            var_dump($return->MateriasMallaAprobadasResult->any);
//            $xml = simplexml_load_string($return->MateriasMallaAprobadasResult->any);
//            $aprobadasArray=$xml->NewDataSet->V_MATERIAS_ACREDITADAS;
//            $numeroAprobadas = $aprobadasArray->count();
//            echo "Materias Aprobadas: ".$numeroAprobadas;
//            
//        } catch (Exception $e) {
//            echo "Exception occured: " . $e;
//        }
       
       /*******************************************************************
        *      OBTENER INFORMACION GENERAL DESDE LA MATRICULA INGRESADA   *
        *******************************************************************/
       
       try {            
            $client = new SOAPClient($wsdl_url);
            $params = array(
                'matricula' => "$matricula"
            );
            $return = $client->InformacionAcademicaEstudianteGet($params);
            
            $xml = simplexml_load_string($return->InformacionAcademicaEstudianteGetResult->any);
//            var_dump($xml->NewDataSet->Table);
            $ci_student = $xml->NewDataSet->Table->COD_ESTUDIANTE;
            $estado_student = $xml->NewDataSet->Table->ESTADO_ESTUDIANTE;
            $nombres_student = $xml->NewDataSet->Table->NOMBRES;
            $apellidos_student = $xml->NewDataSet->Table->APELLIDOS;
            $cod_division = $xml->NewDataSet->Table->COD_DIVISION;
            $cod_carrera = $xml->NewDataSet->Table->COD_CARRERA;
            $cod_especializ = $xml->NewDataSet->Table->COD_ESPECIALIZ;
            $nombre_carrera = $xml->NewDataSet->Table->NOMBRE_CARRERA;
            $num_aprobadas = $xml->NewDataSet->Table->NUMAPROBADAS;
            $cod_unidad = $xml->NewDataSet->Table->COD_UNIDAD;
        
//           $aprobadasArray=$xml->NewDataSet->V_MATERIAS_ACREDITADAS;
//            $numeroAprobadas = $aprobadasArray->count();
//            echo "Materias Aprobadas: ".$numeroAprobadas;
            
        } catch (Exception $e) {
            echo "Exception occured: " . $e;
        }
        
        
        
        try {
            $client = new SOAPClient($wsdl_url);
            $params = array(
                'codigoEstudiante' => "$matricula",
                'codigoDivision' => "$cod_division",
                'codigoCarrera' => "$cod_carrera",
                'codigoEspecializacion' => "$cod_especializ"                
            );
            $return = $client->CreditosEstudiante($params);
            $resumenCreditosArray = $return->CreditosEstudianteResult->Resumen->Credito;
            //echo count($resumenCreditosArray);  
//            var_dump($resumenCreditosArray);
            foreach ( $resumenCreditosArray as $credito){
                if($credito->TipoCredito == "OPTATIVA"){
                    $creditoOptativo = array(
                        'Tomados' => $credito->Tomados,
                        'Flujo' => $credito->Flujo,
                        'Excedente' => $credito->Excedente,
                        'IdTipoCredito' => $credito->IdTipoCredito
                    );
                }
                if($credito->TipoCredito == "LIBRE OPCION"){
                    $creditoLibreOpcion = array(
                        'Tomados' => $credito->Tomados,
                        'Flujo' => $credito->Flujo,
                        'Excedente' => $credito->Excedente,
                        'IdTipoCredito' => $credito->IdTipoCredito
                    );
                }
                if($credito->TipoCredito == "FORMACIÓN BÁSICA"){
                    $creditoFormacionBasica = array(
                        'Tomados' => $credito->Tomados,
                        'Flujo' => $credito->Flujo,
                        'Excedente' => $credito->Excedente,
                        'IdTipoCredito' => $credito->IdTipoCredito
                    );
                }
                if($credito->TipoCredito == "FORMACIÓN PROFESIONAL"){
                    $creditoFormacionProfesional = array(
                        'Tomados' => $credito->Tomados,
                        'Flujo' => $credito->Flujo,
                        'Excedente' => $credito->Excedente,
                        'IdTipoCredito' => $credito->IdTipoCredito
                    );
                }
                if($credito->TipoCredito == "FORMACIÓN HUMANA"){
                    $creditoHumana = array(
                        'Tomados' => $credito->Tomados,
                        'Flujo' => $credito->Flujo,
                        'Excedente' => $credito->Excedente,
                        'IdTipoCredito' => $credito->IdTipoCredito
                    );
                }
                if($credito->TipoCredito == "ELECTIVA DE FORMACIÓN HUMANA"){
                    $creditoElectivaHumana = array(
                        'Tomados' => $credito->Tomados,
                        'Flujo' => $credito->Flujo,
                        'Excedente' => $credito->Excedente,
                        'IdTipoCredito' => $credito->IdTipoCredito
                    );
                }
            }
//            $xml = simplexml_load_string($return->CreditosEstudianteResult->Resumen);
            
            echo "Creditos Optativa Excendente: ".$creditoOptativo['Excedente'];
            echo "<br/>";
            echo "Creditos Libre Opcion Excendente: ".$creditoLibreOpcion['Excedente'];
            echo "<br/>";
            echo "Creditos Basico Excendente: ".$creditoFormacionBasica['Excedente'];
            echo "<br/>";
            echo "Creditos Profesional Excendente: ".$creditoFormacionProfesional['Excedente'];
            echo "<br/>";
            echo "Creditos Humana Excendente: ".$creditoHumana['Excedente'];
            echo "<br/>";
            echo "Creditos Electiva Humana Excendente: ".$creditoElectivaHumana['Excedente'];
//            var_dump($xml);
            
        
//           $aprobadasArray=$xml->NewDataSet->V_MATERIAS_ACREDITADAS;
//            $numeroAprobadas = $aprobadasArray->count();
//            echo "Materias Aprobadas: ".$numeroAprobadas;
            
        } catch (Exception $e) {
            echo "Exception occured: " . $e;
        }
       
       
        ?>
    </body>
</html>
