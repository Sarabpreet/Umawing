

<?php 

		//database params 
		// routes of the documents
		// directory change..
		 
		//include "functions/functions.php";





//importing an the routes's array & defining few variables

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
				
					break;
					}
				}


			if(!$route_match) {

				//include(FRONTEND_PATH.'home.php');
					exit('no route found');

			}

		//include($_SERVER['DOCUMENT_ROOT'].'umawings/controller/'.$route['controller'].'.php');
	
	include(CONTROLLER_PATH.$route['controller'].'.php');
	
			if(file_exists(VIEW_PATH.'posts'.DS.$route['view'].'.php'))
		{
				// if file is in the directory, then show that page..
		    include(VIEW_PATH.'posts'.DS.$route['view'].'.php');

		}
		else
		{
			// include default layout
		  
		  include(VIEW_PATH.'layouts'.DS.'application.php');

		}


	
	//include(VIEW_PATH.$route['contoller'].$route['view'].'.php');

		}


	dispatcher($routes); //calling the dispacth function



?>
