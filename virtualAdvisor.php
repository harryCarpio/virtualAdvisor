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
       $matricula = $_POST["matriculaIn"];
//
//        try {
//            $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?wsdl';
//            $client = new SOAPClient($wsdl_url);
//            $params = array(
//                'matricula' => "$matricula"
//            );
//            $return = $client->MateriasMallaAprobadas($params);
//            
//            $xml = simplexml_load_string($return->MateriasMallaAprobadasResult->any);
//            $aprobadasArray=$xml->NewDataSet->V_MATERIAS_ACREDITADAS;
//            $numeroAprobadas = $aprobadasArray->count();
//            echo "Materias Aprobadas: ".$numeroAprobadas;
//            
//        } catch (Exception $e) {
//            echo "Exception occured: " . $e;
//        }
       
       
       try {
            $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?wsdl';
            $client = new SOAPClient($wsdl_url);
            $params = array(
                'matricula' => "$matricula"
            );
            $return = $client->InformacionAcademicaEstudianteGet($params);
            
            $xml = simplexml_load_string($return->InformacionAcademicaEstudianteGetResult->any);
            var_dump($xml->NewDataSet->Table);
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
       
       
        ?>
    </body>
</html>
