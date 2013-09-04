

<?php include "functions/functions.php";




	
//posts/2/edit
//preg_match('/^posts\/(?P<id>\d+)\/edit$/',$url,$matches);
//echo $route['controller'];
//include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');




include('config.php');


function dispatcher($routes) {


//requested url

	$url=$_SERVER['REQUEST_URI'];

//removes application root from url
	$url=str_replace('/'.APP_ROOT.'/','',$url);

//holds the named captures
	$params=array();

//becomes true if $route['url'] matches

	$route_match=false;

//loops over routes, looking for a match ... 
foreach ($routes as $urls => $route) {


//if match found, appends $matches to $params
//sets route_match to true and exits the loop.

			if(preg_match($route['url'],$url,$matches)) {
			$params=array_merge($params,$matches);
			$route_match=true;
			include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');
			break;
			}
		}


	if(!$route_match) {
			exit('no route found');
	}

//include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');

}



dispatcher($routes);

	//include($_SERVER['DOCUMENT_ROOT'].'umawings/frontend/home.php');

?>
