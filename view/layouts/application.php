<?php 
$path='frontend/';




?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->

	<link rel="stylesheet" href="<?php echo $path;?>stylesheets/base.css">
	<link rel="stylesheet" href="<?php echo $path;?>stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php echo $path;?>stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">

</head>
<body>


<h2>Application's Page OR Default Page</h2>

<?php if($_SESSION['echo']['notice']) {

echo '<div class="notice">';
echo $_SESSION['echo']['notice'];
echo '</div>';


}

 ?>
<?php 


include(VIEW_PATH.$route['controller'].DS.$route['view'].'.php');
?>



<!-- End Document
================================================== -->
</body>
</html>

