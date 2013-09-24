<?php 

function error_msg($errors,$msg){
	
	if($errors){
		return $msg;
	}
	else {
		return '';
	}
} ?>