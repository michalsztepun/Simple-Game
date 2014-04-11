<?php


use core\CURL\Curl as CURL;
use \Exception;

$curl = new CURL();

$params = array(
		'command' => 'toDoSomething',
		'user' => 'alex',
		'state' => 'housemate',
	);

$url = 'http://www.google.com';

try {

	$response = $curl->post($url,$params);

}catch(Exception $error) {

	$error->getMessage();

}


var_dump($response);

///=================================================
'http://www.google.com/index.php';


if(isset($_POST['command'])) {

	$command = $_POST['command'];
	
}

switch($command) {

	case 'toDoSomething':
	 	$test = new ToDoSomethingClass();
	 	$test->execute();
	 	$test->echoResponse();


	 	break;

	 case 'other command';

	 	break;

	 default:

	   	break;

}


//===================

class ToDoSomethingClass() 
{

	public function execute()
	{

		// some code

	}

	public function echoRepsonse()
	{

		$response = "OK";

		echo $response;

	}

}

