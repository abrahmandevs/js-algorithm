<?php
	ob_start();
	session_start();
	$baseUrl = 'http://localhost/study-files/Git/js-algorithm/';
	$siteName = 'JavaScrit';
	
	function urlName($urlName){
		$getName = current(explode('.', $urlName));
		$currentName = ucwords(strtolower(preg_replace('/-/', ' ', $getName)));
		//str_replace('mix search', 'replacement', 'string');
		return $currentName;
	}
	/* $folder = dirname($_SERVER['PHP_SELF']);
	$getFolder = end(explode('/', $folder));
	print_r($getFolder); */
	//$getUrlName = urlName($_SERVER['PHP_SELF']);
	$requestUrl = basename($_SERVER['PHP_SELF']) == 'index.php' ? 'Home' : basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta Tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
	<!-- Company Title -->
	<title><?php echo (urlName($requestUrl).' | '.$siteName ) ?></title>
	<!-- google-font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
	<!-- Company Icon -->
	<link rel="icon" href="<?php echo $baseUrl ?>images/demo/js.png" />
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl ?>css/all.min.css" />
	<!-- Tailwind CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl ?>css/app.css" />
	<script src="<?php echo $baseUrl ?>css/tailwind.min.css"></script>
	
	<!-- swiper css  -->
	<link rel="stylesheet" href="<?php echo $baseUrl ?>css/swiper-bundle.min.css" />
	<style>
		@font-face {
			font-family: 'Arimo', 'Oswald';
			src: url( 'https://fonts.googleapis.com/css2?family=Arimo&family=Oswald&display=swap');
		} 
		.font-arimo{
			font-family:'Arimo', sans-serif!important;
		}
		.font-oswald{
			font-family:'Oswald', sans-serif!important;
		}
	</style>
</head>

<body class="font-oswald">
	<header>
		<?php include("home-nav.php") ?>
		<?php include("home-toggle-nav.php") ?>
	</header>