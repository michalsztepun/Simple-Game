<?php 

	$production = false;

	if( !$production ) {

		ini_set('display_errors', 1);
		error_reporting(E_ALL);
		
	}  

	define('DBNAME','nazwa');
	define('USERNAME','root');
	define('PASSWORD','root');