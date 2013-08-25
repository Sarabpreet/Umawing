<?php


function select() {

$query='select * from wng_post';


$result=mysql_query($query);
$row=mysql_fetch_array($result);
echo $row[2];


}

function insert() {



		$query ='insert into wng_post set wng_title="some title goes here",
									  wng_body="some random post goes here....",
									  wng_created_at=now(),
									  wng_user_id=1
									  ';
		$result=mysql_query($query);
		if(!$result){
		echo mysql_error();
		}
		else {
		echo "added that row";
		}

}  //inserts ends...


function update() {


$query ='update wng_post set
							  wng_title="some title goes here",
							  wng_body="some random post goes here....",
							  wng_created_at=now(),
							  wng_user_id=1
							  ';



$result=mysql_query($query);
if(!$result){
echo mysql_error();
}
else {
echo "updated that row";
}

}



function delete() {

$query ='delete from wng_post where wng_user_id=1';


$result=mysql_query($query);
if(!$result){
echo mysql_error();
}
else {
echo "Row Deleted";
}
}




//select();
//insert();
//update();
//delete();

//---------------------now some serious functions------------------------------------//


function create_post($params){


/*

*creates a post 
*@param type : array name: $params
*@returns : bool

*/

			$connection = database_connect();
			$query=sprintf("insert into wng_post 
				set wng_title='%s',wng_body='%s',wng_created_at=NOW(),
				wng_user_id='%s'",
				mysql_real_escape_string($params['wng_title']),
				mysql_real_escape_string($params['wng_body']),
				mysql_real_escape_string($params['wng_user_id']));


					$result=mysql_query($query);
					if(!$result) {
						return false;
					}
					else {
					return true;
					}

}

/* create_post(array('wng_title'=>'this is the tittle from the function',
				  'wng_body'=>'This is the body',
				  'wng_user_id'=>1));
*/



function update_post($params){


				/*

				*updates a post 
				*@param type : array name: $params
				*@returns : bool

				*/

			$connection = database_connect();
			$query=sprintf("update wng_post 
				set wng_title='%s',wng_body='%s',wng_created_at=NOW(),
				wng_user_id='%s'
				where wng_id=%s",
				mysql_real_escape_string($params['wng_title']),
				mysql_real_escape_string($params['wng_body']),
				mysql_real_escape_string($params['wng_user_id']),
				mysql_real_escape_string($params['wng_id'])
				);


					$result=mysql_query($query);
					if(!$result) {
						return false;
					}
					else {
					return true;
					}



}

update_post(array('wng_title'=>'this is the updated post',
				  'wng_body'=>'This is the updated body',
				  'wng_user_id'=>1,
				  'wng_id'=>177));


?>