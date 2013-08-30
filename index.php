

<?php include "functions/functions.php";

	$url=$_SERVER['REQUEST_URI'];

	$url=str_replace('/umawings/','',$url);


	
	//posts/2/edit




$routes=array(

  array('url'=>'/^posts\/(?P<id>\d+)$/','controller'=>'posts','view'=>'show'),
  array('url'=>'/^posts\/(?P<id>\d+)\/edit$/','controller'=>'posts','view'=>'show')
				);

$params=array();

foreach ($routes as $url => $route) {

	echo "looking for match<br/>";

	if(preg_match($route['url'],$url,$matches)) {

	$params=array_merge($params,$matches);

	echo "matchced found";
	}

	
}

//preg_match('/^posts\/(?P<id>\d+)\/edit$/',$url,$matches);

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

<div class="topm"></div>

	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->



		<div class="container">

	
	<h1 class="logo three column" >uma wings</h1>



			<nav class="six column offset-by-six">

			<ul>
			<li><a href="#">About</a></li>
			<li><a href="#">how it works</a></li>
			<li><a href="#">sign up</a></li>
			</ul>

			</nav>

<section class="one-third columns">
	

	<h2>introducing something cool</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni nisi accusantium ipsa facere maxime inventore perferendis voluptatum quas consequuntur laudantium. Veniam, doloribus doloremque quis molestiae deleniti numquam possimus eaque beatae.</p>
</section>
		
	<section class="one-third column">
	

	<h3>been here before?: login</h3>

	<form action="#">
		
<input type="email">
<input type="password">
<input type="submit">
	</form>

</section>
		

	<section class="one-third column">

	<h3>been here before?: login</h3>

			<form action="#">
				
		<input type="email">
		<input type="password">
		<input type="submit">
			</form>

	</section>



	<section class="one-third column">
		
	<h3>new to uma wings? : <strong>sign up here.</strong></h3>

	<form action="#">

<input type="text">		
<input type="email">
<input type="password">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aperiam, amet, deserunt repellat quae eveniet aliquid iusto tempora dolores a fugiat necessitatibus adipisci excepturi molestias quasi nostrum magnam sequi numquam.</p>
<input type="submit">
	</form>

</section>


	</div>


<div class="container">
	
<section class="one-third column">
	
<h4>topic...</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, nobis, veritatis, reiciendis aliquam perferendis maxime debitis possimus incidunt et blanditiis aperiam cumque nam! Aliquam, error sequi neque quos repellendus veritatis.</p>
</section>

<section class="one-third column">
	
<h4>topic...</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, nobis, veritatis, reiciendis aliquam perferendis maxime debitis possimus incidunt et blanditiis aperiam cumque nam! Aliquam, error sequi neque quos repellendus veritatis.</p>
</section>

<section class="one-third column">
	
<h4>topic...</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, nobis, veritatis, reiciendis aliquam perferendis maxime debitis possimus incidunt et blanditiis aperiam cumque nam! Aliquam, error sequi neque quos repellendus veritatis.</p>
</section>




</div>

<div class="container">
	
<footer class="sixteen columns">
	
	<nav>
		

		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Login</a></li>
			<li><a href="#">Career</a></li>
			<li><a href="#">Developers</a></li>
			<li><a href="#">Statistics</a></li>
		</ul>
	</nav>

<div class="credit">
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia provident est minus veritatis maiores quam ipsam. Ipsam, inventore, consequuntur optio esse eum consequatur suscipit velit ab laudantium magnam autem voluptate?</p>
</div>
</footer>

</div>

<!-- End Document
================================================== -->
</body>
</html>