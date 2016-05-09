<?php 
function trim_input($con, $var){
	$trimmed_var = mysqli_real_escape_string($con, $var);
	return $trimmed_var;
}
function trim_input_titlecase($con, $var){
	$trimmed_var = mysqli_real_escape_string($con, $var);
	$titlecase = ucwords(strtolower($trimmed_var)); 
	return $titlecase;
}
function trim_input_uppercase($con, $var){
	$trimmed_var = mysqli_real_escape_string($con, $var);
	$uppercase = strtoupper($trimmed_var); 
	return $uppercase;
}
function trim_output($var){
	$trimmed_var = stripslashes($var);
	return $trimmed_var;
}

function strip_tag($var){
	$trimmed_var  = strip_tags($var, '<p/>');
	return $trimmed_var;
}

function strip_alltag($var){
	$trimmed_var  = strip_tags($var);
	return $trimmed_var;
}
function currentDate(){
	return date('Y-m-d H:i:s');
}
function currentDateYmdHisFolder(){
	return date('Y-m-d-H-i-s');
}


?>