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

	echo "successfully created a post";
	}

	break;


}




		?>

