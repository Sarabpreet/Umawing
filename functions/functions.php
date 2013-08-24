<?php 

function db_connect() {

	$connection=mysql_connect('localhost','root','');
		
		if(!connection) {

			return false;

	}


	if(!mysql_select_db('umawings',$connection))
	{

	return false;

	}

}

db_connect();

echo $con;

?>