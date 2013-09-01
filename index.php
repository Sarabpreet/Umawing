

<?php include "functions/functions.php";

	$url=$_SERVER['REQUEST_URI'];

	$url=str_replace('/umawings/','',$url);


	
	//posts/2/edit




$routes=array(

  array('url'=>'/^posts\/(?P<id>\d+)$/','controller'=>'posts','view'=>'show'),
  array('url'=>'/^posts\/(?P<id>\d+)\/edit$/','controller'=>'posts','view'=>'show')
				
			);

$params=array();

foreach ($routes as $urls => $route) {

	echo "looking for match<br/>";

	if(preg_match($route['url'],$url,$matches)) {

	$params=array_merge($params,$matches);
	$route_match=true;

	include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');


	//print('controller: '.$route['controller'].'<br>'.'view :'.$route['view']. ' id :'.$params['id']);
	//echo $url;

	break;
	}
	else {

		echo('no route found');
	}
}
	


//preg_match('/^posts\/(?P<id>\d+)\/edit$/',$url,$matches);

//echo $route['controller'];
//include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');


	include($_SERVER['DOCUMENT_ROOT'].'umawings/frontend/home.php');

?>
