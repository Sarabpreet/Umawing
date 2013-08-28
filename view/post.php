<?php 


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


		?>