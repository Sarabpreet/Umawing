	<fieldset>

<legend>Create A post</legend>
	<input name="wng_post[wng_title]" size="50" type="text" value="">

<?php echo error_msg($errors['wng_title'],"The title has to be from 2-100 chracters only. including space."); ?>
	<br>
	<?php echo error_msg($errors['wng_body'],"The title has to be from 2-2000 characters only. including space."); ?>

	<textarea class="text_tiny" name="wng_post[wng_body]" id="postbody" cols="30" rows="10">

	</textarea>
	<input name="wng_post[wng_user_id]" value="1" type="hidden">
	
	<input type="submit" value="save">

	</fieldset>


