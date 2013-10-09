<?php 

			//routes url to controller and view 

$routes=array(

			
		//posts/2/edit
		//preg_match('/^posts\/(?P<id>\d+)\/edit$/',$url,$matches);
		//echo $route['controller'];
		//include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');

		  		               array('url' => '/^posts\/(?P<id>\d+)$/', 'controller' => 'posts', 'view' => 'show'),
									 array('url' => '/^posts\/(?P<id>\d+)\/edit$/', 'controller' => 'posts', 'view' => 'edit'),
									 array('url' => '/^posts\/new$/', 'controller' => 'posts', 'view' => 'new'),
									 array('url' => '/^posts\/create$/', 'controller' => 'posts', 'view' => 'create'),
									 array('url' => '/^posts\/?$/', 'controller' => 'posts', 'view' => 'index'),
									 array('url' => '/^posts\/(?P<id>\d+)\/edit$/', 'controller' => 'posts', 'view' => 'edit'),
									 array('url' => '/^posts\/(?P<id>\d+)\/update$/', 'controller' => 'posts', 'view' => 'update'),
 									array('url' => '/^posts\/(?P<id>\d+)\/delete$/', 'controller' => 'posts', 'view' => 'delete'),
								

					 		
									 


									   );
	

//Database Connection Params

define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','umawings');
define("WEBSITE",'http://localhost/');




//$_SERVER['DOCUMENT_ROOT'].'umawings/controllers'

define('SERVER_ROOT',$_SERVER['DOCUMENT_ROOT']);

//Directory Structure 

define('DS','/');

//Application Directory 

define('APP_ROOT','umawings');

//MVC paths 

define('MODEL_PATH',SERVER_ROOT.APP_ROOT.DS.'models'.DS);
define('VIEW_PATH',SERVER_ROOT.APP_ROOT.DS.'view'.DS);
define('CONTROLLER_PATH',SERVER_ROOT.APP_ROOT.DS.'controller'.DS);
define('FRONTEND_PATH',SERVER_ROOT.APP_ROOT.DS.'view'.DS.'layouts');
define('FRONTEND',SERVER_ROOT.APP_ROOT.DS.'view'.DS.'layouts'.DS);
define('FRONTEND1',SERVER_ROOT.APP_ROOT.DS.'frontend/');

/*
echo MODEL_PATH."<br>";
echo VIEW_PATH."<br>";
echo CONTROLLER_PATH;
*/

//dbinclude 

include "lib/database.php";
include"lib/controller.php";
include"lib/model.php";
include"lib/view.php";
?>
