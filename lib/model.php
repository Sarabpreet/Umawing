<?php 

/* this part, loops over the array of regular expressions
and check them. 

@params array $validations
@params array $params
@return bool or array 
*/

function validate($validations,$params) {


	$error=array('total_errors'=>0);
	foreach ($validations  as $fields => $validation) {
	if(!preg_match($validation,$params[$field])){
	$errors['total_errors']++;
	$error[$field]=true;
		}
	}

	if($errors['total_errors']>0) {

		return $errors;
	}
	else {

		return false;
	}
}


$post_validations=array('title'=>'/^[[:alnum:][:punct:][:space:]]{1,100}$/');

$params=array('title'=>'This is the title');

validate($post_validations,$params);

 ?>