<?php

class Item
{
	//Connection Instance
	private $connection;

	//Table Name
	private $table_name = "Item";

	//Table Columns
	public $cat_id;
	public $item_id;
	public $qty;
	public $cost;

	//Constructor
	public function __construct($connection)
	{
		$this->connection = $connection;
	}

	public function create() {}

	public function read()
	{
		$sql = "SELECT * FROM " . $this->table_name;

		$stmt = $this->connection->prepare($sql);

		$stmt->execute();

		return $stmt;
	}

	public function update() {}

	public function delete() {}

}

?>