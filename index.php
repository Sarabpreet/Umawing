<?php 

//starting a session 

session_start();


		// database params 
		// routes of the documents
		// directory change..
		 


//importing an the routes's array & defining few variables

	include('config.php');



function parse_params(){

/*
returns an array of $_POST
returns an array

*/


$params=array();

	if(!empty($_POST)){
	$params=array_merge($params,$_POST);
}

if(!empty($_GET)){
	$params=array_merge($params,$_GET);
}


	return $params;
}


	function dispatcher($routes) {

			/*
	
	checks the requested url, removes the application root from url, 
	holds the named captures get and post data
	becomes true if $route['url'] matchs,
	loops over routes, looking for a match

	returns a boolean if the requested url is true and gives back the requested page.

	if false, it returns a 404 with an error message.


	*/

		//requested url

			$url=$_SERVER['REQUEST_URI'];

		//removes application root from url
			$url=str_replace('/'.APP_ROOT.'/','',$url);

		//holds the named captures and post data.
			$params=parse_params();

			//removes query string from url (ie from abc.com?abc=k acts like abc.com)
$url=str_replace('?'.$_SERVER['QUERY_STRING'],'',$url);

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

	include(CONTROLLER_PATH.$route['controller'].'.php');
	

		if(file_exists(VIEW_PATH.'layouts'.DS.$route['controller'].'.php'))
		{
				// if file is in the directory, then show that page..
		include(VIEW_PATH.'layouts'.DS.$route['controller'].'.php');

		}
		else
		{
			// include default layout or the 404 page
		  
		  include(VIEW_PATH.'layouts'.DS.'application.php');

		}


$_SESSION['echo']['notice']="";
$_SESSION['echo']['warning']="";


		}


	dispatcher($routes); //calling the dispacth function



?>
