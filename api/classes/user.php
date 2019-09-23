<?php

class User
{
	//Connection Instance
	private $connection;

	//Table Name
	private $table_name = "User";

	//Table Columns
	public $user_id;
	public $user_name;
	public $f_name;
	public $l_name;
	public $email;
	public $address1;
	public $address2;
	public $address3;

	//Constructor
	public function __construct($connection)
	{
		$this->connection = $connection;
	}

	public function register() {}

	public function login() {}

	public function update() {}

	public function delete() {}

}

?>