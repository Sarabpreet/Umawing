<form action="<?php echo '/'.APP_ROOT.'/'?>posts/create" method="post">
	
	<fieldset>
		


<legend>Create A post</legend>
	<input name="post[title]" size="50" type="text"><br>
	<textarea name="post[body]" id="postbody" cols="30" rows="10"></textarea>
	<input type="submit" value="save">
	</fieldset>
</form>