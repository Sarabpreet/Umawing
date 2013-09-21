<?php 


/*redirects to address...
@param "String" $address
return type: Redirects
*/


function  redirect_to($address) {

	header("location:".WEBSITE.APP_ROOT.'/'.$address);
	exit;
}

function echo_warning($msg) {


/*Create warning messages for errors
returns a boolean
*/

	if(!$msg){ 
	return false;
	}
	$_SESSION['echo']['warning']=$msg;
	return true;
}

function echo_notice($msg) {


/*Create notice messages for errors
returns a boolean
*/

	if(!$msg){ 
	return false;
	}
	$_SESSION['echo']['notice']=$msg;
	return true;
}



 ?>