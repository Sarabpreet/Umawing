<?php 

function database_connect() {
/*

mysql connect

*/

$connect =mysql_connect('localhost','root',''); // connecting the database from localhost

if(!$connect) {

die('ERROR, connecting to database server'.mysql_error());

}
 
 /* selecting the database */
if(!mysql_select_db('umawings',$connect)) {

	die("Eror, connecting to the selected database ".mysql_error()); 
}



} // function close



database_connect();

?>