<?php 

include($_SERVER['DOCUMENT_ROOT'].'umawings/models/post.php');

//$action = $_GET['action'];

switch($route['view']) {

case "show": 
 	//$id=$_GET['id'];
	$post=select_post($params['id']);
	include($_SERVER['DOCUMENT_ROOT'].'umawings/view/post.php');
	break;

case "new": 

	echo "this is a new aciton";

break;

}




		?>