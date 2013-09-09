<form action="<?php echo '/'.APP_ROOT.'/'?>posts/create" method="post">
	
	<fieldset>
		


<legend>Create A post</legend>
	<input name="post[wng_title]" size="50" type="text"><br>
	<textarea name="post[wng_body]" id="postbody" cols="30" rows="10"></textarea>
	<input name="post[wng_user_id]" value="1" type="hidden">
	
	<input type="submit" value="save">


	</fieldset>

</form>