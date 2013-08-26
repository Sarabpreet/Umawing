<?php 

function database_connect() {
/*
*
* @mysql connects and selects the main database.
* @function name -> database_connect() 
* @parameters -> none
* @returns a boolean and resource 
*/
<<<<<<< HEAD

=======
>>>>>>> 8f6225725e1ebb122bca849f0e0d1cddf16a7d54

$connect =mysql_connect('localhost','root',''); // connecting the database from localhost

if(!$connect) {

return false;

}
 
 /* selecting the database */
if(!mysql_select_db('umawings',$connect)) {

	return false;
}
return $connect;

} // function close



database_connect(); //calling database_connect


?>
