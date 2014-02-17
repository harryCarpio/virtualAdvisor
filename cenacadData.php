<?php
    
    include 'simple_html_dom.php';
//    ini_set('max_execution_time', 300);
    function getTeacherMarker($teacher_id,$cod_materia){

        $prof_id=$teacher_id;
        $url = "https://www.cenacad.espol.edu.ec/index.php/module/Report/action/HistorialProfesor/id/".$prof_id."/";
        $html = file_get_html($url);   
        
        $html1 = $html->find('tr')[6];
        $html2 = $html1->find('table');
        $tableProfName = $html2[1];
        $tableEvals = $html2[2];
        $tableTotal = $html2[3];
        
//        echo "".$tableTotal;
        foreach($tableTotal->find('td') as $element){
           $elemento = $element."";
           if(strlen($elemento)>90)
               $resultados = 15;
           else{
                $resultados = explode("</td>",explode("</b>",$element."")[1])[0];
                $resultados = (int)$resultados;
           }
        }
        $paginasResultados = ceil($resultados/15);
        for($pag_idx=0;$pag_idx<$paginasResultados;$pag_idx++){
            if($pag_idx==0){
                $i = 0;$j = 0;
                $factorCod = 3; // +9
                $factorMark = 6; // +9
                foreach($tableEvals->find('td') as $element){
                   $i++;        
                }    
                $i=$i/9;
                for($j = 1 ; $j<$i; $j++){
                    $a = ($j*9) + $factorCod;
                    $b = ($j*9) + $factorMark;
                    $codTmp = "".$tableEvals->find('td')[$a];
                    $codTmp = explode('</td>',explode('align="left">',$codTmp)[1])[0]." ";

                   if(strcmp($cod_materia, $codTmp)== 0){
                        $markTmp = "".$tableEvals->find('td')[$b];
//                        var_dump($markTmp);
                        $markTmp = explode('</td>',explode('">',$markTmp)[1])[0];

                        if(is_numeric($markTmp))                        
                            return $markTmp;
                    }               
                }
            }
            else{
                $pag_tmp = $pag_idx * 15;
                $url = "https://www.cenacad.espol.edu.ec/index.php/module/Report/action/HistorialProfesor/id/".$prof_id."/o/".$pag_tmp."/limit/15";
                $html = file_get_html($url);   
                $html1 = $html->find('tr')[6];
                $html2 = $html1->find('table');
                $tableProfName = $html2[1];
                $tableEvals = $html2[2];
                $tableTotal = $html2[3];

                $i = 0;$j = 0;
                $factorCod = 3; // +9
                $factorMark = 6; // +9
                foreach($tableEvals->find('td') as $element){
                   $i++;        
                }    
                $i=$i/9;
                for($j = 1 ; $j<$i; $j++){
                    $a = ($j*9) + $factorCod;
                    $b = ($j*9) + $factorMark;
                    $codTmp = "".$tableEvals->find('td')[$a];
                    $codTmp = explode('</td>',explode('align="left">',$codTmp)[1])[0]." ";

                    if(strcmp($cod_materia, $codTmp)== 0){
                        $markTmp = "".$tableEvals->find('td')[$b];
//                        var_dump($markTmp);
                        $markTmp = explode('</td>',explode('">',$markTmp)[1])[0];
                        return $markTmp;
                    }
                }
            }
        }
        return 0;
    }
?>
