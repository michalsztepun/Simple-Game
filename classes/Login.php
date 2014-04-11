<?php 

namespace classes;

class Login {

	$this->post;

	public function __construct($post)
	{

		$this->setPostParams($post);

	}

	public function setPostParams($post)
	{
		$this->post = $post;
	}

	public function doSomethingWithPOST()
	{

		var_dump($this->post);


		// open DB cennection 

		// check if user is DB, if not register

		// and return 'success' if all is okey 

		// return 'error' if not

		return 'success';
		
	}

	
}
