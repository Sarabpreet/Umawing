<?php 

/* this part, loops over the array of regular expressions
and check them. 

@params array $validations
@params array $params
@return bool or array 
*/

function validate($validations,$params) {

	$errors=array('total_errors'=>0);
	foreach ($validations  as $field => $validation) {
	if(!preg_match($validation,$params[$field])){
	$errors['total_errors']++;
	$error[$field]=true;
		}
	}

	if($errors['total_errors'] > 0) {
		return $errors;
	}
	else {
		return false;
	}
}


$post_validations=array('title'=>'/^[[:alnum:][:punct:][:space:]]{1,100}$/',
						'body'=> '/^[[:alnum:][:punct:][:space:]]{1,2000}$/');

$params=array('title'=>'this is spartaaaaaaaa');



 ?>