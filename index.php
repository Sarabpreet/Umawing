

<?php include "functions/functions.php";

	$url=$_SERVER['REQUEST_URI'];

	$url=str_replace('/umawings/','',$url);
	
	//posts/2


	preg_match('/^posts\/(?P<id>\d+)$/',$url,$matches);

	print_r($matches);
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
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

		<div class="container">

			<h1>This is wings!</h1>
				<div class="one-third column"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, quam, esse consectetur laborum accusantium minima saepe doloribus beatae aliquam amet explicabo sint unde corporis eligendi tenetur deserunt illum assumenda! Ipsa!</p></div>
				<div class="one-third column"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, quam, esse consectetur laborum accusantium minima saepe doloribus beatae aliquam amet explicabo sint unde corporis eligendi tenetur deserunt illum assumenda! Ipsa!</p></div>
				<div class="one-third column"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, quam, esse consectetur laborum accusantium minima saepe doloribus beatae aliquam amet explicabo sint unde corporis eligendi tenetur deserunt illum assumenda! Ipsa!</p></div>


		</div>


<!-- End Document
================================================== -->
</body>
</html>