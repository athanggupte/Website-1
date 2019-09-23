<?php

class DBClass extends mysqli
{
	//Singleton Instance variable
	private static $instance = null;

	//Database connection parameters
	private $host = "sql312.epizy.com";
	private $user = "epiz_24527158";
	private $pass = "v21LRFqXdNWE";
	private $database = "epiz_24527158_spotsale";

	private function __construct()
	{
		parent::__construct($this->host, $this->user, $this->pass, $this->database);

		if(parent->connect_error)
		{
			die("Connect Error : " . parent->connect_error);
		}

		parent::set_charset("utf-8");
	}

	public static function getInstance()
	{
		if(!self::$instance instanceof self)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function __clone()
	{
		trigger_error("Clone is not allowed. ", E_USER_ERROR);
	}

	public function __wakeup()
	{
		trigger_error("Deserializing is not allowed. ", E_USER_ERROR);
	}

}

?>