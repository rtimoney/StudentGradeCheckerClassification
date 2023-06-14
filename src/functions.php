<?php

namespace App;

class functions{


function getClassification($input_text)
{
    $lines = explode("newline", $input_text);
    $module_marks=array();
    foreach ($lines as $line) {
       $line_array = explode(",", $line);
       $double_weighted_module = 'programming';

       if (strcasecmp($line_array[0], $double_weighted_module) == 0) {
            $line_array[1]=$line_array[1]*2;
            }

       $module_marks_array = array("module"=>$line_array[0], "marks"=>$line_array[1]);
       array_push($module_marks,$module_marks_array);
    }

    
    $total_score = array_sum(array_column($module_marks, "marks"));
    
                if($total_score>=420){
                    $classification = 'Distinction';
            }elseif($total_score>=360){
                $classification = 'Commendation';
            }elseif($total_score>=300){
                $classification = 'Pass';
            }else{
                $classification = 'Fail';
            }


$returnClass = $classification;

return $returnClass;

}
}
?>