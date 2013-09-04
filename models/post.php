<?php





database_connect(); //calling database_connect




/*

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





					an example test run of the scripts 

					//select();
					//insert();
					//update();
					//delete();




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

