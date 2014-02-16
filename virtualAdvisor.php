<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php
        include "difficultIndicator.php";
        include "processInfo.php";
        
        $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?wsdl';
        $matricula = $_POST["matriculaIn"];

       
       /*******************************************************************
        *       OBTENER INFORMACION GENERAL DEL ESTUDIANTE
        *       DESDE LA MATRICULA INGRESADA  
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
        
        
        /******************************************************************
        *      OBTENER NÚMERO DE CREDITOS CURSADOS Y RESTANTES            *
        *******************************************************************/
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
            
//            echo "Creditos Optativa Excendente: ".$creditoOptativo['Excedente'];
//            echo "<br/>";
//            echo "Creditos Libre Opcion Excendente: ".$creditoLibreOpcion['Excedente'];
//            echo "<br/>";
//            echo "Creditos Basico Excendente: ".$creditoFormacionBasica['Excedente'];
//            echo "<br/>";
//            echo "Creditos Profesional Excendente: ".$creditoFormacionProfesional['Excedente'];
//            echo "<br/>";
//            echo "Creditos Humana Excendente: ".$creditoHumana['Excedente'];
//            echo "<br/>";
//            echo "Creditos Electiva Humana Excendente: ".$creditoElectivaHumana['Excedente'];
            
        } catch (Exception $e) {
            echo "Exception occured: " . $e;
        }
       
        
        /******************************************************************
        *      LLENAR ARREGLO CON LAS MATERIAS DISPONIBLES ACTIVAS X EST. *
        *******************************************************************/        
        
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
//            var_dump($materiasDisponibles);
            
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
            
//            var_dump($materiasPorTomar);
//            var_dump($materiasPorProfesor);
//            var_dump($materiasHorarioClases);
        } catch (Exception $e) {
            echo "Exception occured: " . $e;
        }
       
        ?>
    </head>
    <body>
        <h4>Bienvenido <?php echo $nombres_student." ".$apellidos_student?></h4>
        
        <table>
            <thead></thead>
            <tbody>
                <tr>
                    <td>Carrera</td><td>:</td>
                    <td><?php echo $nombre_carrera?></td>
                </tr>
                <tr>
                    <td>Unidad Academica</td><td>:</td>
                    <td><?php echo $cod_unidad?></td>
                </tr>
                <tr>
                    <td>Materias Aprobadas</td><td>:</td>
                    <td><?php echo $num_aprobadas?></td>
                </tr>
            </tbody>
        </table>
        
        
        <h5>Materias Disponibles Estudiante</h5>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Paralelo</th>
                    <th>Profesor</th>
                    <th>Creditos</th>
                    <th>Tipo Credito</th>
                    <th>Indicador Dificultad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($materiasDisponibles as $materiaDisp){
//                        echo "
//                        <tr>
//                            <td>$materiaDisp->COD_MATERIA_ACAD</td>
//                            <td>$materiaDisp->NOMBRE_MATERIA</td>
//                            <td>".teacherID($materiasPorProfesor,$materiaDisp->COD_MATERIA_ACAD)."</td>
//                            <td>$materiaDisp->NUMCREDITOS</td>
//                            <td>$materiaDisp->TIPOCREDITO</td>
//                            <td>".difficultIndicator($materiaDisp->NUMCREDITOS, $materiaDisp->COD_MATERIA_ACAD)."</td>
//                        </tr>";
                        getCoursesByCodMateria($materiasPorProfesor,$materiaDisp->COD_MATERIA_ACAD, $materiaDisp);
                        
                    }
                ?>
            </tbody>
        </table>
        
        
    </body>
</html>
