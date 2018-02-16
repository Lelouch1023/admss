<?php

require_once 'Register.php';

/**
* 
*/
class Users{
	private $db;
	private $connection;

	function __construct(argument)
	{
		$this->db = new DB_Connection();
		$this->connection = $this->db->get_connection();
	}
}

?>