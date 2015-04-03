<?php
	//Check if the user is logged in correctly
	session_start();
	
	if(!isset($_SESSION["logged"])||!$_SESSION["logged"]){
		header('HTTP/1.0 401 Unauthorized'); //if not logged return 401 and die
		die();
	}
	
	$modules_dir = 'modules/shell_files/';
	$module = escapeshellcmd($_GET['module']);

	echo shell_exec( $modules_dir . $module . '.sh' );