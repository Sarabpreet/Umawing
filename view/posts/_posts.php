

<div class="post">


	<h2>
<a href="
<?php echo '/'.APP_ROOT.'/';?>posts/<?php echo $post['wng_id'];?>">

<?php echo $post['wng_title']?></h2>
</a>
		
	<div class="body">
	
	<?php echo $post['wng_body'] ?>

	</div>
	<div class="username">
		Posted by <?php echo $post['wng_user_name'] ?>  <span class="date">on <?php echo $post['wng_created_at'] ?></span>
	</div>

	<div class="edit"><a href="<?php echo '/'.APP_ROOT.'/';?>posts/<?php echo $post['wng_id'];?>/edit">[edit]</a></div>
	<div class="delete"><a href="<?php echo '/'.APP_ROOT.'/';?>posts/<?php echo $post['wng_id'];?>/delete">[delete]</a></div>
</div>


	
