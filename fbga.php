<?php

	ob_start();
	include('FBGalvanize.php');
	
	//Retrieve all the Get Variables that we need
	$googleUA = $_GET["googlecode"];
	$googleDomain = $_GET["googledomain"]; //normally facebook.com
	$pageLink = $_GET["pagelink"];
	$pageTitle = $_GET["pagetitle"];
	
	$GA = new FBGalvanize($googleUA);
	$GA->setDomain($googleDomain);
	
	$GA->trackPageView($pageLink,$pageTitle);

?>
