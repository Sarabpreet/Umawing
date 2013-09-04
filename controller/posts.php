<?php 



include(MODEL_PATH.'post.php');

//$action = $_GET['action'];

switch($route['view']) {

case "show": 
 	//$id=$_GET['id'];
	$post=select_post($params['id']);
	include(VIEW_PATH.'/post.php');
	break;

case "new": 

	echo "this is a new action";

	break;

}




		?>