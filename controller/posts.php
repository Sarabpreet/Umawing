<?php 



include(MODEL_PATH.'post.php');

//$action = $_GET['action'];

switch($route['view']) {

case "show": 

	$post=select_post($params['id']);

	break;

case "edit": 


	break;

case "new": 


	break;

case "create": 


	break;
}




		?>