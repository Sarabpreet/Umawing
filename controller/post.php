<?php 

include($_SERVER['DOCUMENT_ROOT'].'umawings/models/post.php');

$action = $_GET['action'];

switch($action) {

case "show": 
 	$id=$_GET['id'];
	$post=select_post($id);
	include($_SERVER['DOCUMENT_ROOT'].'umawings/view/post.php');
	break;

case "new": 

	echo "this is a new aciton";

break;

}




		?>