<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('functions.php');

$output = array(
	"error" => false,
  "string" => "",
	"answer" => 0
);

$input_text = $_REQUEST['input_text'];
$input_text = urldecode($input_text);

$answer=='unchanged';

$answer = (new App\functions)->getClassification($input_text);

//$answer=getClassification($input_text);

$output['string']=$input_text."=".$answer;
$output['answer']=$answer;

if($answer=='unchanged'){
	$output['error']='true';
	}

echo json_encode($output);
exit();
?>