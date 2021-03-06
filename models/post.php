<?php

$post_validations=array('wng_title'=>'/^[[:alnum:][:punct:][:space:]]{1,100}$/',
						'wng_body'=> '/^[[:alnum:][:punct:][:space:]]{1,2000}$/');




database_connect(); 

//calling database_connect


	/**
	 * returns array of posts from database
	 * 
	*/



	function list_posts()
	{
		  $connection = database_connect();

$query="SELECT wng_post.wng_id as wng_id,wng_post.wng_created_at,wng_post.wng_title, wng_post.wng_body, wng_post.wng_user_id, 
		wng_users.wng_user_name from wng_post,wng_users where wng_post.wng_user_id=wng_users.wng_user_id order by wng_post.wng_id desc LIMIT 0, 10";
			
			$result = mysql_query($query);		
			
			$number_of_posts = mysql_num_rows($result);
			if ($number_of_posts == 0) 
			{
			  return false;	
			}
			
			$result = result_to_array($result);
			
			return $result;
			
	}
	

function select_post($id){


	/*

				*selects a post 
				*@param type: int name: $id (it contains the id number of the post which we want to select)
				*@returns : array of post from database

	*/

			$connection = database_connect();
			$query=sprintf("SELECT wng_post.wng_title, wng_post.wng_created_at, wng_post.wng_body, wng_post.wng_id, wng_users.wng_user_name
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


		?>

