<?php 

require_once "config/config.php";
require_once "bootstrap.php";

use classes\Login;


if(isset($_POST['command'])) {

	$command = $_POST['command'];	

}

switch ($command) {

	case 'login':
		$login = new Login($_POST);
		$response = $login->doSomethingWithPOST();

		echo $response;

		break;

	case 'register':
		$login = new Register($_POST);
		$response = $login->doSomethingWithPOST();

		echo $response;

		break;
	
	default:
		# code...
		break;
}


