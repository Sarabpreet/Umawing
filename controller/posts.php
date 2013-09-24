<?php 


include(MODEL_PATH.'post.php');

//$action = $_GET['action'];

switch($route['view']) {

case "show": 

	$post=select_post($params['id']);

	break;

case "index": 

	$posts=list_posts();

	break;

case "new": 


	break;
	case "create": 
    $errors = validate($post_validations,$params['wng_post']);
	if($errors) {
		$route['view']='new';
		echo_warning('Please Correct the bellow errors');
		
	}
	else {
		create_post($params['wng_post']);
		echo_warning('Sucessfully Created Posts!');	
		redirect_to('posts');
	}

	break;

case "edit": 

   $post=select_post($params['id']);
   break;

case "update": 

	$params['wng_post']['wng_id']=$params['id'];
	
	if(update_post($params['wng_post'])) {
	echo_notice('Sucessfully updated Posts!');	
	redirect_to('posts');
	}

	break;

case "delete": 

if(delete_post($params['id'])) {


echo_notice('sucessfully Deleted post');
redirect_to('posts');
}


break;

}




		?>

