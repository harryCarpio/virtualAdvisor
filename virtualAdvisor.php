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
       
       MateriasDisponiblesEstudianteActivas
        ?>
    </body>
</html>
