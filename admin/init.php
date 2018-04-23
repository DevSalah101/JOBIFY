<?php
	include 'connect.php';
	// Routes
	$tpl 	= 'includes/templates/'; // Template Directory
	$lang 	= 'includes/languages/'; // Language Directory
	$func	= 'includes/functions/'; // Functions Directory
	$css 	= 'assets/dist/css/'; // Css Directory
    $js 	= 'assets/dist/js/'; // Js Directory
    
	// Include The Important Files
	include $func . 'functions.php';
	include $lang . 'english.php';
    include $tpl . 'header.php';
    
	// Include Navbar On All Pages Expect The One With $noNavbar Vairable
