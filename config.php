<?php 

//routes url to controller and view 

$routes=array(

			
		//posts/2/edit
		//preg_match('/^posts\/(?P<id>\d+)\/edit$/',$url,$matches);
		//echo $route['controller'];
		//include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');



  array('url'=>'/^posts\/(?P<id>\d+)$/','controller'=>'posts','view'=>'show'),
  array('url'=>'/^posts\/(?P<id>\d+)\/edit$/','controller'=>'posts','view'=>'show')
				
			);



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

/*
echo MODEL_PATH."<br>";
echo VIEW_PATH."<br>";
echo CONTROLLER_PATH;
*/
?>