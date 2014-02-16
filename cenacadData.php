<?php
    
    include 'simple_html_dom.php';
    
    $prof_id="0701502940";
    $url = "https://www.cenacad.espol.edu.ec/index.php/module/Report/action/HistorialProfesor/id/".$prof_id."/";
    
//    $url = "http://www.google.com";

    
    $html = file_get_html($url);
    
    // Find all links 
//    $i=0;
//    foreach($html->find('tr') as $element){
//       echo $i.".-".$element. '<br>';
//       $i++;
//    }
    
    
    $html1 = $html->find('tr')[6];
   
//    $i = 0;
//    foreach($html1->find('table') as $element){
//       echo $i.".-".$element. '<br>';
//       $i++;
//    }
    $html2 = $html1->find('table');
    $tableProfName = $html2[1];
    $tableEvals = $html2[2];
    $tableTotal = $html2[3];
    
    
    

//    var_dump($tableEvals->find('td')[5]);
    $i = 0;
    $j = 0;
    $factorCod = 3; // +9
    $factorMark = 6; // +9
    foreach($tableEvals->find('td') as $element){
//       echo $i.".-".$element. '<br/>';
       $i++;
    }
    $i=$i/9;
    for($j = 1 ; $j<$i; $j++){
        $a = ($j*9) + $factorCod;
        $b = ($j*9) + $factorMark;
        echo $j.".-"."($j/$i)".$tableEvals->find('td')[$a]."---".$tableEvals->find('td')[$b]."<br/>";
    }
    
?>
