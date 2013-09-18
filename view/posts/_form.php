	<fieldset>
	

<legend>Create A post</legend>
	<input name="wng_post[wng_title]" size="50" type="text" value="<?php echo $post["wng_title"]; ?>">

	<br>
	<textarea class="text_tiny" name="wng_post[wng_body]" id="postbody" cols="30" rows="10">
		
<?php echo $post["wng_body"]; ?>


	</textarea>
	<input name="wng_post[wng_user_id]" value="1" type="hidden">
	
	<input type="submit" value="save">

	</fieldset>