<?php



function database_connect() {
/*
*
* @mysql connects and selects the main database.
* @function name -> database_connect() 
* @parameters -> none
* @returns a boolean and resource 
*/


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

/*



an example test run of the scripts 

//select();
//insert();
//update();
//delete();


*/ 

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

/* 
		***calling of the function create_post by example*** 

create_post(array('wng_title'=>'this is the tittle from the function',
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


/*

		***calling of the function update_post by example*** 


update_post(array('wng_title'=>'this is the updated post',
				  'wng_body'=>'This is the updated body',
				  'wng_user_id'=>1,
				  'wng_id'=>174));

*/




function delete_post($wng_id){


				/*

				*deletes a post 
				*@param type : int name: $params
				*@returns : bool

				*/

			$connection = database_connect();
			$query=sprintf("delete from wng_post
				where wng_id=%s",
				mysql_real_escape_string($wng_id)
				);


					$result=mysql_query($query);
					if(!$result) {
						return false;
					}
					else {
					return true;
					}

}

	/*
		***calling of the function delete_post()  by example*** 


	delete_post(178);

	*/


function select_post($id){


	/*

				*selects a post 
				*@param type: int name: $id (it contains the id number of the post which we want to select)
				*@returns : array of post from database

	*/

		$connection = database_connect();
				$query=sprintf("SELECT wng_post.wng_title, wng_post.wng_body, wng_post.wng_id, wng_users.wng_user_name
			FROM wng_post, wng_users
			WHERE wng_post.wng_user_id = wng_post.wng_user_id and wng_post.wng_id=%s",
			mysql_real_escape_string($id));

			$result=mysql_query($query);
			$number_of_posts=mysql_num_rows($result);
			if($number_of_posts==0) {
			return false;
			}
			else {
					$row=mysql_fetch_array($result);
					return $row;
			}

		
}

/*


		***calling of the function selected_post example*** 

	$post=select_post(233);
	if($post){


		echo '<h2>'.$post['wng_title'].'</h2>';
		echo '<h2> '.$post['wng_body'].'</h2>';
		echo '<h2>'.$post['wng_user_name'].'</h2>';
	    echo '<h2> '.$post['wng_id'].'</h2>';
	    echo '<hr>';
}

		else {

			echo "<h2>there's no post in the database</h2>";
		}



*/ 



		

		?>

