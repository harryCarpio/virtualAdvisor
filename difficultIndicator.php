<?php

/* 
 * Descripcion : Determina el indicador del grado de dificultad de una materia.
 * Intervalo Valores : [0-100]
 */

function difficultIndicator($num_creditos,$cod_materia, $identif_prof,$prof_mark){
    /*
     * DEFINIR PESOS A CADA VARIABLE, SUMADOS DEBE DAR 100
     */
    $study_hours_weight = 30/100;
    $syllabus_weight = 15/100;
    $projects_weight = 20/100;
    $class_hours_weight = 20/100;
    $teacher_mark_weight = 5/100;
    $students_mark_weight = 10/100;
    $malla_curricular_weight = 0/100;
    
    
    /*
     * SETEAR VALORES A CADA VARIABLE
     */
    $study_hours = 2 * $num_creditos;    
    $class_hours = $num_creditos;
    // ESTAS VARIABLES OBTENERLAS DESDE UNA BASE DE DATOS DEL SISTEMA.
    $syllabus = 0;
    $projects = 0;
    $teacher_mark = (float)(100 - $prof_mark);
    $students_mark = 0;
    $malla_curricular = 0;
    
    
    /*
     * ESTANDARIZAR VALORES A UNA ESCALA DE 100
     */
    
    $study_hours_standard = ($study_hours * 100 )/10;    
    $class_hours_standard = ($class_hours * 100 )/5;
    $syllabus_standard = $syllabus; // ESTA VARIABLE DEBE VENIR SOBRE 100 DESDE LA FUENTE DE DATOS
    $projects_standard = ($projects * 100 )/2; 
    $teacher_mark_standard = $teacher_mark; // ESTA VARIABLE DEBE VENIR SOBRE 100 DESDE LA FUENTE DE DATOS
    $students_mark_standard = $students_mark; // ESTA VARIABLE DEBE VENIR SOBRE 100 DESDE LA FUENTE DE DATOS
    $malla_curricular_standard = $malla_curricular;
    
    
    
    $study_hours_weighted = $study_hours_standard * $study_hours_weight;    
    $class_hours_weighted = $class_hours_standard * $class_hours_weight;
    $syllabus_weighted = $syllabus_standard * $syllabus_weight;
    $projects_weighted = $projects_standard * $projects_weight;
    $teacher_mark_weighted = $teacher_mark_standard * $teacher_mark_weight;
    $students_mark_weighted = $students_mark_standard * $students_mark_weight;
    $malla_curricular_weighted = $malla_curricular_standard * $malla_curricular_weight;
    
    $indicator = $study_hours_weighted + $class_hours_weighted + $syllabus_weighted
            + $projects_weighted + $teacher_mark_weighted + $students_mark_weighted 
            + $malla_curricular_weighted;
    
    return $indicator;
    
}
?>
