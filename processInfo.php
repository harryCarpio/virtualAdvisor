<?php

    function teacherID($materiasPorProfesor,$codMateria){
        foreach ($materiasPorProfesor as $materiaPorProfesor) {
//            var_dump($materiaPorProfesor->COD_MATERIA_ACAD);
//            var_dump($codMateria);
            $codMateriaLocal = $materiaPorProfesor->COD_MATERIA_ACAD;
            if( strcmp($codMateriaLocal,$codMateria)==0){
//                var_dump($materiaPorProfesor->DOCENTE);
//                return $materiaPorProfesor->IDENTIF_PROF;
                return $materiaPorProfesor->DOCENTE;
            }       
         }
        
    }
    
    function getCoursesByCodMateria($materiasPorProfesor,$codMateria, $materiaDisp){
        foreach($materiasPorProfesor as $materiaPorProfesor){
            $codMateriaLocal = $materiaPorProfesor->COD_MATERIA_ACAD;
            if( strcmp($codMateriaLocal,$codMateria)==0){ 
                $identif_prof = $materiaPorProfesor->IDENTIF_PROF;
//                var_dump($identif_prof);
                $identif_prof=  str_replace(" ", "", $identif_prof);
                $prof_mark = getTeacherMarker($identif_prof,$codMateria);
                echo "
                <tr>
                    <td>$materiaDisp->COD_MATERIA_ACAD</td>
                    <td>$materiaDisp->NOMBRE_MATERIA</td>
                    <td>$materiaPorProfesor->PARALELO</td>
                    <td>$materiaPorProfesor->DOCENTE - $materiaPorProfesor->IDENTIF_PROF</td>
                    <td>".$prof_mark."</td>    
                    <td>$materiaDisp->NUMCREDITOS</td>
                    <td>$materiaDisp->TIPOCREDITO</td>
                    <td>".difficultIndicator($materiaDisp->NUMCREDITOS, $codMateria, $identif_prof, $prof_mark)."</td>
                </tr>";
                
            }
        }
    }
?>
