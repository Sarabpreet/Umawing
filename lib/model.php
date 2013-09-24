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
		$errors[$field]=true;
		}
	}

	if($errors['total_errors'] > 0) {
		return $errors;
	}
	else {
		return false;
	}
}

/*
$post_validations=array('wng_title'=>'/^[[:alnum:][:punct:][:space:]]{1,100}$/');
$params=array('wng_title'=>"",'wng_body'=>"");
print_r(validate($post_validations,$params));

*/
 ?>