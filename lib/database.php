<?php 

function database_connect() {
/*
*
* @mysql connects and selects the main database.
* @function name -> database_connect() 
* @parameters -> none
* @returns a boolean and resource 
*/


	$connect =mysql_connect(HOST,USERNAME,PASSWORD); // connecting the database from localhost
	if(!$connect) {
	return false;
	}
	 /* selecting the database */
	if(!mysql_select_db(DATABASE,$connect)) {	
	return false;
	}
	return $connect;

} // function close



  function result_to_array($result)
	{
	  $result_array = array();
		for ($i=0; $row = mysql_fetch_array($result) ; $i++)
		{
		   $result_array[$i] = $row; 
		}
		
		return $result_array;
	}
	



?>