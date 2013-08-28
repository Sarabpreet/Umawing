<?php 

include($_SERVER['DOCUMENT_ROOT'].'umawings/models/post.php');

$action = $_GET['action'];

switch($action) {

case "show": 

	$post=select_post(233);
	include($_SERVER['DOCUMENT_ROOT'].'umawings/view/post.php');
	break;

case "new": 

	$post=select_post(233);
	include($_SERVER['DOCUMENT_ROOT'].'umawings/view/post.php');

break;

}




		?>