<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("Dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("Functions.php");
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="delrey.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<title></title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
		include("menu.php");
		print'</nav>
			
		
	</header>
	<main>';
		
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("Home.php"); }
	
	# News
	else if ($_GET['menu'] == 2) { include("About.php"); }
	
	# Contact
	else if ($_GET['menu'] == 3) { include("Gallery.php"); }
	
	# About us
	else if ($_GET['menu'] == 4) { include("News.php"); }

	else if ($_GET['menu'] == 5) { include("Becomeamisfit.php"); }
	
	else if ($_GET['menu'] == 6) { include("Register.php"); }

	else if ($_GET['menu'] == 7) { include("Signin.php"); }

	else if ($_GET['menu'] == 8) { include("Admin.php"); }
	print '
	</main>
	<footer>
    <p> Copyright,AV</p>
    	</footer>
</body>
</html>';
?>