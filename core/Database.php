<?php 

namespace core;

use \PDO;
use \PDOException;

class Database {

	/**
	 * Stores PDO DB connection 
	 *
	 * @param $dbh;
	 * @access private
	 */
	private $dbh;

	/**
	 * open DB connection
	 */
	public function __construct($dbname)
	{

		$dsn = 'mysql:dbname='.$dbname.';host=127.0.0.1';
		$user = USERNAME;
		$password = PASSWORD;

		try {
		    $dbh = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
		    echo 'Connection failed: ' . $e->getMessage();
		}

		$this->dbh = $dbh;

	}

	public function getUsernameFromDB($username)
	{

		$sql = "SELECT * FROM nazwa WHERE username = :username";

		$params = array(
				':username' => 'Alex';
			);

		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);

		$yellow = $sth->fetchAll(PDO::FETCH_ASSOC);

		return $yellow;


	}

}