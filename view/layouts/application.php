<?php 
$path=FRONTEND;





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
<script type="text/javascript" src="<?php echo '/'.APP_ROOT.'/';?>frontend/js/tinymce/tinymce.min.js"></script>

	<link rel="stylesheet" href="<?php echo '/'.APP_ROOT.'/';?>frontend/stylesheets/base.css">
	<link rel="stylesheet" href="<?php echo '/'.APP_ROOT.'/';?>frontend/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php echo '/'.APP_ROOT.'/';?>frontend/stylesheets/layout.css">


<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>



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

