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

	if(create_post($params['wng_post'])) {

	echo_notice('Sucessfully Created Posts!');	
	redirect_to('posts');
	}

	break;

case "edit": 

   $post=select_post($params['id']);
   break;

case "update": 


	if(update_post($params['wng_post'])) {

	echo_notice('Sucessfully Created Posts!');	
	redirect_to('posts');
	}

	break;


}




		?>

